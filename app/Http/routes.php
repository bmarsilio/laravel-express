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


Route::get('teste/{nome}', 'TesteController@index');
Route::get('notas', 'TesteController@notas');


Route::get('/', 'PostsController@index');
Route::get('posts', 'PostsController@posts');

Route::get('blog', 'PostsController@index');


Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function() {
    Route::group(['prefix'=>'posts'], function() {
        Route::get('', ['as'=>'admin.posts.index', 'uses'=>'PostsAdminController@index']);
        Route::get('create', ['as'=>'admin.posts.create', 'uses'=>'PostsAdminController@create']);
        Route::post('store', ['as'=>'admin.posts.store', 'uses'=>'PostsAdminController@store']);
        Route::get('edit/{id}', ['as'=>'admin.posts.edit', 'uses'=>'PostsAdminController@edit']);
        Route::put('update/{id}', ['as'=>'admin.posts.update', 'uses'=>'PostsAdminController@update']);
        Route::get('destroy/{id}', ['as'=>'admin.posts.destroy', 'uses'=>'PostsAdminController@destroy']);
    });
});

Route::group(['prefix'=>'auth'], function() {
    Route::get('login', 'Auth\AuthController@getLogin');
    Route::post('login', 'Auth\AuthController@postLogin');
    Route::get('logout', 'Auth\AuthController@getLogout');
});


/*login

Route::get('/auth', function(){
    if(Auth::attempt(['email'=>'bruno.marsilio@hotmail.com', 'password'=>'123456'])) {
        return 'true';
    }else {
        return 'false';
    }

    if(Auth::check()) {

    }
});


logout
Route::get('/auth/logout', function(){
    Auth::logout();
});
*/


