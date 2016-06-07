<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::auth();

// Authenticated routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/meu-diario', ['as' => 'my-diary', 'uses' => 'DiariesController@myDiary']);

    Route::get('/novo-dia', ['as' => 'newPost', 'uses' => 'PostsControllers@create']);
    Route::post('/salvar-dia', ['as' => 'savePost', 'uses' => 'PostsControllers@save']);
});
