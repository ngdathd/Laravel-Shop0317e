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

Route::get('hello', function () {
    echo 'Hello';
});

Route::get('category', 'CategoryController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
//    phải login mới xem được
    Route::group(['middleware' => ['admin']], function () {
//        phải login với quyền admin mới xem được
        Route::get('admin', 'Admin\DashboardController@index');
        Route::resource('admin/category', 'Admin\CategoryController');
    });
});
