<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\ProduseController;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\CosController;
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

/*Route::get('/', function(){
    return view('welcome');
});*/


    Route::group(['namespace' => 'App\Http\Controllers'], function()
    {
    Route::group(['prefix' => 'users'], function() {
        Route::get('/', 'UsersController@index')->name('users.index')->middleware('auth');
        Route::get('/create', 'UsersController@create')->name('users.create')->middleware('auth');
        Route::post('/create', 'UsersController@store')->name('users.store')->middleware('auth');
        Route::get('/{user}/show', 'UsersController@show')->name('users.show')->middleware('auth');
        Route::get('/{user}/edit', 'UsersController@edit')->name('users.edit')->middleware('auth');
        Route::patch('/{user}/update', 'UsersController@update')->name('users.update')->middleware('auth');
        Route::delete('/{user}/delete', 'UsersController@destroy')->name('users.destroy')->middleware('auth');
        });

    Route::group(['prefix' => 'produse'], function() {
        Route::get('/', [ProduseController::class, 'index'])->name('produse.index')->middleware('auth');
        Route::get('/create', 'ProduseController@create')->name('produse.create')->middleware('auth');
        Route::post('/create', 'ProduseController@store')->name('produse.store')->middleware('auth');
        Route::get('/{produs}/show', 'ProduseController@show')->name('produse.show')->middleware('auth');
        Route::get('/{produs}/edit', 'ProduseController@edit')->name('produse.edit')->middleware('auth');
        Route::post('/{produs}/update', 'ProduseController@update')->name('produse.update')->middleware('auth');
        Route::delete('/{produs}/delete', 'ProduseController@destroy')->name('produse.destroy')->middleware('auth');
        }); 



            Route::get('/', [LoginRegisterController::class, 'login'])->name('login');
            Route::get('/register', [LoginRegisterController::class, 'register'])->name('register');
            Route::post('/store', [LoginRegisterController::class, 'store'])->name('store');
            Route::post('/authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
            Route::get('/dashboard', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
            Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
        });
   


