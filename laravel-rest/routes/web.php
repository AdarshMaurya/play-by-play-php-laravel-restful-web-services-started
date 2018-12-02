<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//https://blog.pusher.com/csrf-laravel-verifycsrftoken/
//https://stackoverflow.com/questions/46266553/why-laravel-api-return-419-status-code-on-post-and-put-method
