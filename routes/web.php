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

// Route::get('/','UserController@index');

// Route::post('/ login', 'UserController@check')->name('login.check');

// Route::post('/login', 'UserController@logout')->name('user.logout');

// Route::get('/login', 'UserController@index')->name('student.login');



Route::get('student/create','StudentController@create')->name('student.create');
Route::post('student/create','StudentController@store')->name('student.store');