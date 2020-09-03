<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

// Route::get(アドレス, 関数やコントローラー);

Route::get('/', function () {
    return view('welcome'); // view()でviews/welcome.blade.phpをレンダリングして表示。
});

// 第２引数にコントローラーを指定する場合は、'コントローラー名@アクション名'と書く。

// /hello
Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

Route::get('hello/show', 'HelloController@show');

// /person
Route::get('person', 'PersonController@index');

Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

// /board
Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');
