<?php

/*

*/


Auth::routes();
Route::get('register/verify/{token}','Auth\RegisterController@verify');

Route::get('/', 'HomeController@index');


Route::get('/{catchall?}', function () {
    return response()->view('home');
})->where('catchall', '(.*)');
