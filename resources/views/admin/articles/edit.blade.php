
@extends('admin.layouts.app_admin')


@section('head')
    @parent
@endsection

@section('content')
    <div class="container">
        @component("admin.components.breadcrumb")
            @slot('title') Редактирование категорий @endslot
            @slot('parent') Главная @endslot
            @slot('active')  Категория @endslot
        @endcomponent
    </div>


    <form class="form-horizontal"
          action="{{route("admin.article.update", $articles)}}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put">
         {{csrf_field()}}

        @include('admin.articles.partials.form')

    </form>

@endsection


