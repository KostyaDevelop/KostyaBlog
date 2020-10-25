

@extends('admin.layouts.app_admin')


@section('head')
    @parent
@endsection

@section('content')
    <div class="container">
        @component("admin.components.breadcrumb")
            @slot('title') Список новостей @endslot
            @slot('parent') Главная @endslot
                @slot('active')  Новость @endslot
        @endcomponent
    </div>

    <hr>

    <a  class="col-sm-4 text-center" href="{{route('admin.article.create')}} ">
        <i class="fa fa-plus-square-o" > Создать новость</i></a>

    <br><br>
        <table class="table table-striped table-admin" m-4>
                <thead>
                    <th> Наименование </th>
                    <th> Текст  </th>
                    <th> Фото  </th>
                    <th > Действие  </th>
                </thead>
                <tbody>
                    @forelse ($articles as $article)
                        <tr>
                            <td class="break_word">{{$article->title}}</td>
                            <td class="break_word">{{$article->text}}</td>
                            <td class="break_word">
                                <img class="post-photo" width="100px" height="100px" src="{{$article->photo_adress}}">
                            </td>
                            <td>
                                <form onsubmit="if(confirm('Удалить?'){ return true }else{ return false })"
                                      action="{{route('admin.article.destroy', $article)}}" method="post">
                                    {{csrf_field()}}
                                    <a href="{{route("admin.article.edit", [$article->id])}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        {{csrf_field()}}
                                        <button type="submit" class="btn"> <i class="fa fa-trash-o"></i> </button>
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center">Данные отсутсвуют</td>
                        </tr>
                        @endforelse
                </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">
                        <ul class="padination pull-right">
                        </ul>
                    </td>
                </tr>
            </tfoot>
        </table>
    {{$articles->links()}}
@endsection

