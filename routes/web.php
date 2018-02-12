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

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth','role:admin']], function () {
        Route::get('/', function () {
             return view('main');
        });
 });

Route::get('/', function () {
    return view('main');
});
Route::get('/{path?}', function () {
    return view('main');
});
Route::get('/tip/{path?}', function () {
    return view('main');
});