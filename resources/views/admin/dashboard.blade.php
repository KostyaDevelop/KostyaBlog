@extends('admin.layouts.app_admin')

@section('head')
    @parent
@endsection

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-sm-12 col-lg-12">
              <div  class="count-article">
                  Новостей:  {{count($articles)}}
              </div>
          </div>
{{--          <div class="col-sm-6">--}}
{{--              <div class="jumbotron">--}}
{{--                  <p><span  class="label label-primary">Посетителей </span></p>--}}
{{--              </div>--}}
{{--          </div>--}}
      <div class="row">
          <div class="col-sm-12">
              <a class="btn btn-block btn-default" href="{{route("admin.article.index")}}">Создать новость / Редактировать новость</a>
          </div>
  </div>
  </div>
@endsection

