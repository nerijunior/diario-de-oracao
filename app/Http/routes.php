<?php

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()
            ->route('my-diary');
    }
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::auth();

// Authenticated routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/meu-diario', ['as' => 'my-diary', 'uses' => 'DiariesController@myDiary']);

    Route::group(['prefix' => '/dia', 'as' => 'posts.'], function () {
        Route::get('/novo', ['as' => 'new', 'uses' => 'PostsControllers@create']);
        Route::post('/salvar', ['as' => 'save', 'uses' => 'PostsControllers@save']);
        Route::get('/{id}', ['as' => 'edit', 'uses' => 'PostsControllers@edit']);
        Route::put('/{id}', ['as' => 'update', 'uses' => 'PostsControllers@update']);
    });

});
