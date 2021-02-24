<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutoresController;

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

Route::get('/', 'TutoresController@index')->name('homeIndex');

Route::post('/', 'TutoresController@store')->name('homeStore');

Route::post('/', 'TutoresController@create')->name('homeCreate');

Route::post('/', 'TutoresController@update')->name('homeUpdate');

Route::post('/', 'TutoresController@destroy')->name('homeDestroy');
