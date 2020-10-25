<?php

Route::get('/', "HomeController@index");

Auth::routes();

Route::get('/home', 'HomeController@index', ["middleware"=>['auth']]);

Route::group(['prefix'=>'admin', 'namespace'=>'admin', 'middleware'=>['auth'=>'admin']], function (){
    Route::get('/', 'DashboardController@Dashboard')->name('admin.index');
    Route::resource('article', 'ArticleController', ['as'=>'admin']);
});
