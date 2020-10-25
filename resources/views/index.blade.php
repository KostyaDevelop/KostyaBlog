@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="text-main-main_page">
            <h5>В этом блоге я расскажу о своих путешествиях, поделюсь впечатлениями и дам некоторые советы
                для начинающих путешественников.</h5>
            <h5>Поехали!</h5>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            @forelse ($articles as $article)
                <table class="table table-striped" >
                    <thead class="thead-light">
                    <th>{{$article->title}}</th>
                    </thead>
                    <tbody>
                            <hr>
                                <tr>
                                    <td class="break_word">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <img class="post-photo-main_page"  src="{{$article->photo_adress}}">
                                            </div>
                                            <div class="col-lg-6">
                                                <p class="text-post">
                                                    {{$article->text}}
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <hr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">Данные отсутсвуют</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
                {{$articles->links()}}
        </div>
    </div>
@endsection

