<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\admin\ArticleController;

class HomeController extends Controller
{



    public function index()
    {
        return view('index', ['articles' => Article::paginate(1)]);
    }
}
