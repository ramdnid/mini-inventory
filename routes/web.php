<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Goods;

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
    $items = Goods::all();
    return view('welcome', [
        'items' => $items
    ]);
});

Route::get('/superadmin', 'AdminController@index')->name('superadmin');
Route::get('/users', 'UserController@index')->name('users');
// Route::get('/create-user', 'UserController@create')->name('create-user');

Route::prefix('admin')
        ->group(function(){
            Route::resource('admin', 'AdminController');
        });
Route::prefix('user')
        ->group(function(){
            Route::resource('user', 'UserController');
        });
Auth::routes();

