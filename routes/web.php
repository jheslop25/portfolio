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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->middleware('auth:web')->group(function(){
    Route::post('/make-project', 'ProjectsController@make');
    Route::post('/delete-project', 'ProjectsController@delete');
    Route::post('/update-project', 'ProjectsController@update');
});

Route::get('/list', 'ProjectsController@list');

Route::post('/get', 'ProjectsController@get');