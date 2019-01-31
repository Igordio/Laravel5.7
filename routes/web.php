<?php
use App\User;
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
    return view('welcome', ['user_count' => User::all()->count()]);
});

Route::resource('users', 'UserController');
Route::get('trashed-users', 'UserController@trashedIndex');
Route::post('users/delete/{id}', 'UserController@delete')->name('users.delete');
Route::put('users/restore/{id}', 'UserController@restore')->name('users.restore');
