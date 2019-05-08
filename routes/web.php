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


Route::get('users', 'UserController@index')->name('users.index');
Route::get('create', 'UserController@create')->name('users.create');
Route::post('users', 'UserController@store')->name('users.store');
Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
Route::put('users/{user}', 'UserController@update')->name('users.update');
Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Auth::routes();

Route::get('/home', function() {
    return view ('dashboard');
});
Route::get('/add', function() {
    return view ('add');
});


/*Route::get('/home', function() {
    return redirect()->route('users.index');
});*/