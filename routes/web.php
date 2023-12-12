<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['namespace' => 'App\Http\Controllers\admin'], function () {

    Route::get('/', function () {
        Redirect::to('/auth/login');
    });
    
    Route::prefix('admin')->middleware(['auth'])->group( function () {
        Route::get('/dashboard', 'Dashboard@invoke')->name('dashboard');
        Route::get('/users', 'UserController@invoke')->name('user.register');
        Route::post('/users', 'UserController@store')->name('user.register');
        Route::get('/users-list', 'UserController@userList')->name('user.list');

        Route::get('/song-register', 'SongController@invoke')->name('song.register');
        Route::post('/song-register', 'SongController@store')->name('song.register');
        Route::get('/song-list', 'SongController@songs')->name('song.list');
    });

    Route::prefix('auth')->group( function () {
        Route::get('/login', 'Authentication@invoke')->name('login');
        Route::post('/login', 'Authentication@auth')->name('login');
        Route::get('/logout', 'Authentication@logout')->name('logout');
    }); 
});