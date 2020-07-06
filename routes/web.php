<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'PageController@index')->name('page.index');
    Route::get('/postcontent/{id}', 'PageController@single')->name('postcontent.single');
});

Route::group(['namespace' => 'Backend', 'middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', 'AdminController@index')->name('admin.index');

    Route::group(['prefix' => 'section'], function () {
        Route::get('/', 'SectionController@index')->name('section.index');
        Route::get('/create', 'SectionController@create')->name('section.create');
        Route::post('/create', 'SectionController@store')->name('section.store');
      });

    Route::group(['prefix' => 'postcontent'], function () {
        Route::get('/', 'PostContentController@index')->name('postcontent.index');
        Route::get('/create', 'PostContentController@create')->name('postcontent.create');
        Route::post('/create', 'PostContentController@store')->name('postcontent.store');
      });
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
