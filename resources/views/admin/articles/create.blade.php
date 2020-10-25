


@extends('admin.layouts.app_admin')


@section('head')
    @parent
@endsection

@section('content')
    <div class="container">
        @component("admin.components.breadcrumb")
            @slot('title') Создание категорий @endslot
            @slot('parent') Главная @endslot
            @slot('active')  Категория @endslot
        @endcomponent
    </div>


    <form class="form-horizontal" method="post" enctype="multipart/form-data"
          action="{{route("admin.article.store")}}"  >

        {{csrf_field()}}
        @include('admin.articles.partials.form')

    </form>

@endsection


