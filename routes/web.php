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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/Partneriai', 'App\Http\Controllers\PartnerisController@index')->name('partneris');
Route::get('/Zaidejai', 'App\Http\Controllers\ZaidejasController@index')->name('zaidejas');
Route::get('/Komandos', 'App\Http\Controllers\KomandaController@index')->name('komanda');
Route::get('/Savininkai', 'App\Http\Controllers\SavininkasController@index')->name('savininkas');
Route::get('/Treneriai', 'App\Http\Controllers\TrenerisController@index')->name('treneris');
