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

//Route::get('/', 'PagesController@Home');
Route::get('/about', 'PagesController@About');
//Route::get('/contact', 'PagesController@Contact');

Route::get('/helperCollection', 'TestController@helperCollection');
Route::get('/classCollection', 'TestController@classCollection');

//Route::get('/', 'TicketsController@index');
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/ticket/{slug?}', 'TicketsController@show');
Route::get('/ticket/{slug?}/edit}', 'TicketsController@edit');
Route::post('/ticket/{slug?}/edit}', 'TicketsController@update');
Route::post('/ticket/{slug?}/delete','TicketsController@destroy');


Route::post('/comment', 'CommentsController@newComment');

//
//
//Auth::routes();
//
Route::get('/', 'PagesController@home');
Route::get('users/register', 'Auth\RegisterController@showRegistrationForm');
Route::post('users/register', 'Auth\RegisterController@register');
Route::get('users/logout', 'Auth\LoginController@Logout');
Route::get('users/login', 'Auth\LoginController@showLoginForm');
Route::post('users/login', 'Auth\LoginController@Login')->name('login');



Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function () {
    Route::get('users', [ 'as' => 'admin.user.index', 'uses' => 'UsersController@index']);
    Route::get('roles', 'RolesController@index');
    Route::get('roles/create', 'RolesController@create');
    Route::post('roles/create', 'RolesController@store');
    Route::get('users/{id?}/edit', 'UsersController@edit');
    Route::post('users/{id?}/edit','UsersController@update');
    Route::get('/', 'PagesController@home');
});
