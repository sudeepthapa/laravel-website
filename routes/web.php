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

Route::redirect('/','/posts');

Route::prefix('posts')->name('post.')->group(function(){

    Route::get('/', 'PostController@index')->name('index');
    Route::get('/create', 'PostController@create')->name('create');
    Route::post('/store', 'PostController@store')->name('store');
    
    Route::get('/{id}/edit','PostController@edit')->name('edit');
    Route::put('/{id}','PostController@update')->name('update');
    
    Route::get('/{id}','PostController@show')->name('show');
    
    Route::delete('/{id}','PostController@destyoy')->name('destroy');

});

Route::resource('students','StudentController');

