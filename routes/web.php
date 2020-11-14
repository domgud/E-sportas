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

Route::get('/', 'HomeController@index');

Route::resource('/partners', 'PartnerController');
Route::resource('/teams', 'TeamController');
Route::resource('/owners', 'OwnerController');
Route::resource('/trainers', 'TrainerController');
Route::resource('/players', 'PlayerController');

