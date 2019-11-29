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

use App\Cryptocurrency;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);
Route::get('profile', function () {
    return '<h1>This is profile page</h1>';
})->middleware('verified');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'CryptocurrenciesController@indexAll')->middleware('auth');
Route::get('cryptocurrencies', 'CryptocurrenciesController@index')->middleware('auth');
Route::get('cryptocurrencies/create', 'CryptocurrenciesController@create')->middleware('auth');
Route::post('cryptocurrencies/create', 'CryptocurrenciesController@store');
Route::post('/', 'RatingsController@store')->middleware('auth');
Route::get('cryptocurrencies/{cryptocurrency}', 'CryptocurrenciesController@show');

