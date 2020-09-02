<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\HelloMiddleware;

// Route::get(アドレス, 関数やコントローラー);

Route::get('/', function () {
    return view('welcome'); // view()でviews/welcome.blade.phpをレンダリングして表示。
});

// 第２引数にコントローラーを指定する場合は、'コントローラー名@アクション名'と書く。
Route::get('hello', 'HelloController@index')->middleware('helo');

Route::post('hello', 'HelloController@post');
