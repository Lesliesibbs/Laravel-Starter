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

Auth::routes();

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/', 'HomeController@index');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/contact', 'ContactController@index')->name('contact');

Route::get('/login-register', 'LoginRegisterController@index')->name('login-register');


Route::group( ['middleware' => ['auth']], function() {
    Route::resource('users', 'UserController');
    Route::resource('roles', 'RoleController');
    Route::resource('posts', 'PostController');
    Route::resource('profile', 'ProfileController');
    Route::resource('competition', 'CompetitionController');
    Route::resource('payments', 'PaymentsController');
});
