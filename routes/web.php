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

Route::prefix('authors')->group(function () {

Route::get('','Controllers\AuthorController@index')->name('author.index');
    Route::get('create','Controllers\AuthorController@create')->name('author.create');
    Route::post('store','Controllers\AuthorController@store')->name('author.store');
    Route::get('edit/{author}', 'Controllers\AuthorController@edit')->name('author.edit');
    Route::post('update/{author}','Controllers\AuthorController@update')->name('author.update');
    Route::post('delete/{author}','Controllers\AuthorController@destroy')->name('author.destroy');
    Route::get('show/{author}','Controllers\AuthorController@show')->name('author.show');
});

Route::prefix('books')->group(function () {

    Route::get('','Controllers\'BooksController@index')->name('book.index');
    Route::get('create','Controllers\BooksController@create')->name('book.create');
    Route::post('store','Controllers\BooksController@store')->name('book.store');
    Route::get('edit/{book}', 'Controllers\BooksController@edit')->name('book.edit');
    Route::post('update/{book}','Controllers\BooksController@update')->name('book.update');
    Route::post('delete/{book}','Controllers\BooksController@destroy')->name('book.destroy');
    Route::get('show/{book}','Controllers\BooksController@show')->name('book.show');
    });
