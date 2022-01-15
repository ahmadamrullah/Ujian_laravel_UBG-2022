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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/jurusan', 'JurusanController@index')->name('jurusan');
Route::get('/jurusan/create', 'JurusanController@create')->name('jurusan.create');
Route::post('/jurusan', 'JurusanController@store')->name('jurusan.store');
Route::get('/jurusan/edit/{id}', 'JurusanController@edit')->name('jurusan.edit');
Route::Put('/jurusan/edit/{id}', 'JurusanController@update')->name('jurusan.update');
Route::get('/jurusan/destroy/{id}', 'JurusanController@destroy')->name('jurusan.destroy');


Route::get('/mahasiswa', 'MahasiswaController@index')->name('mahasiswa');
Route::get('/mahasiswa/create', 'MahasiswaController@create')->name('mahasiswa.create');
Route::post('/mahasiswa', 'MahasiswaController@store')->name('mahasiswa.store');
Route::get('/mahasiswa/edit/{id}', 'MahasiswaController@edit')->name('mahasiswa.edit');
Route::Put('/mahasiswa/edit/{id}', 'MahasiswaController@update')->name('mahasiswa.update');
Route::get('/mahasiswa/destroy/{id}', 'MahasiswaController@destroy')->name('mahasiswa.destroy');

