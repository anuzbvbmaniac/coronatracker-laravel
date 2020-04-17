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

//Route::get('/', function () {
//    $title = 'Overview';
//    return view('welcome', compact('title'));
//});
Route::get('/', 'HomeController@index')->name('home');
Route::get('/countries', 'CountryController@index')->name('countries');
Route::get('/symptoms', function () {
    $title = 'Symptoms';
    return view('symptoms', compact('title'));
})->name('symptoms');
