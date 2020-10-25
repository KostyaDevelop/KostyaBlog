<?php

namespace App\Http\Controllers\admin;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class ArticleController extends Controller

{

    public function index()
     {
        return view('admin.articles.index',
        ['articles' => Article::paginate(8)]);
    }

    public function create()
    {
        return view('admin.articles.create', [
                'articles'=> [],
                'delimiter' => ''
                ]);
    }

    public function store(Request $request)
    {
        //Выбираем изображение из реквеста
        $image = $request->file('picture');

        //Забираем оригинальное имя
        $originalname = $image->getClientOriginalName();

        //Вставляем изображение с оригинальным именем в наш проект
        $request->file('picture')->storeAs('public/uploads', $originalname);

        //Берем путь до нашего изображения
        $path_photo_full =  asset('/storage/uploads') . '/' .  $originalname;

        //Помещаем наше изображение в массив
        $request_array = ($request->all());
        $request_array['photo_adress'] =  $path_photo_full;

        //Загружаем массив в БД
        Article::create($request_array);

        return(redirect()->route('admin.article.index'));

    }


    public function show(Article $articles)
    {
        //
    }


    public function edit(Article $article)
    {
        return view('admin.articles.edit', [
            'articles'=> $article,
            'delimiter' => ''
        ]);
    }


    public function update(Request $request, Article  $article)
    {
        $article->update($request->except('slug'));

        return(redirect()->route('admin.article.index'));
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return(redirect()->route('admin.article.index'));

    }
}



