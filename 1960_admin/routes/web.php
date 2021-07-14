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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();
Route::get('/', 'HomeController@index');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');

    Route::resource('roles' , 'RoleController');
    Route::resource('books', 'BookController');
    Route::get('book-categories', 'BookCategoryController@index')->name('book-categories.index');
    Route::post('book-categories', 'BookCategoryController@store')->name('book-categories.store');
    Route::delete('book-categories', 'BookCategoryController@destroy')->name('book-categories.destroy');
    Route::patch('book-categories', 'BookCategoryController@update')->name('book-categories.update');
    Route::resource('users', 'UserController');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:web'], function () {
    Route::get('profile', 'HomeController@profile')->name('profile');
    Route::get('book-search', 'HomeController@bookSearch')->name('books.search');
});

Route::get('/dash', 'HomeController@index');
