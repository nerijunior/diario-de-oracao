<?php

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()
            ->route('my-diary');
    }
    return view('welcome');
});

Route::auth();

// Authenticated routes
Route::group(['middleware' => ['auth']], function () {
    Route::get('/meu-diario', ['as' => 'my-diary', 'uses' => 'DiariesController@myDiary']);

    Route::group(['prefix' => '/diario', 'as' => 'diaries.'], function () {
        Route::get('/compartilhar', ['as' => 'share', 'uses' => 'DiariesController@share']);
        Route::post('/compartilhar', ['as' => 'share.save', 'uses' => 'DiariesController@saveShare']);
    });

    Route::group(['prefix' => '/dia', 'as' => 'posts.'], function () {
        Route::get('/novo', ['as' => 'new', 'uses' => 'PostsControllers@create']);
        Route::post('/salvar', ['as' => 'save', 'uses' => 'PostsControllers@save']);
        Route::get('/{id}/edit', ['as' => 'edit', 'uses' => 'PostsControllers@edit']);
        Route::put('/{id}', ['as' => 'update', 'uses' => 'PostsControllers@update']);
    });

});

// Ver diário compartilhado
Route::group(['prefix' => '/compartilhado', 'as' => 'shared.'], function () {
    Route::get('/diario/{id}', ['as' => 'diaries.see', 'uses' => 'DiariesController@sharedSee']);
    Route::get('/dia/{id}', ['as' => 'posts.see', 'uses' => 'PostsControllers@sharedSee']);
});
