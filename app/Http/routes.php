<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('ola/{nome}', 'TestController@index');
Route::get('notas', 'TestController@notas');


Route::get('/auth/logout', function() {
    Auth::logout();
    return redirect(route('home'));
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::get('/', ['as' => 'home', 'uses' => 'PostsController@index']);
Route::get('blog', ['as' => 'blog', 'uses' => 'PostsController@posts']);
Route::post('register', ['as' => 'register', 'uses' => 'RegisterController@register']);
Route::post('comment', ['as' => 'comment', 'uses' => 'RegisterController@comment']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
    Route::get('', ['as' => 'admin.posts.index', 'uses' => 'PostAdminController@index']); // nomeando a rota com "as" e dizendo que usa com "uses"
    Route::group(['prefix' => 'posts'], function() {
        Route::get('create', ['as' => 'admin.posts.create', 'uses' => 'PostAdminController@create']); // abre formulário de create
        Route::post('store', ['as' => 'admin.posts.store', 'uses' => 'PostAdminController@store']); // salvar inserção do create
        Route::get('edit/{id}', ['as' => 'admin.posts.edit', 'uses' => 'PostAdminController@edit']); // salvar inserção do create
        Route::put('update/{id}', ['as' => 'admin.posts.update', 'uses' => 'PostAdminController@update']); // salvar inserção do create
        Route::get('destroy/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostAdminController@destroy']); // salvar inserção do create
    });
});