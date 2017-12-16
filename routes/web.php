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

Route::view('/input.html', 'input.index');
Route::resource('inputs','InputController',['except' => [
    'create', 'show', 'edit']]);
/*Route::get('/url', function () {
    return Request::url();
});*/