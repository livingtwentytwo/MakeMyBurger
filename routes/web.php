<?php

use App\Http\Controllers\BurgerController;
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
    return view('home');
});

Route::get('/options', 'BurgerController@index');
Route::post('/options', 'BurgerController@store')->name('store_burger');
Route::get('/breakdown/{burger}', 'BurgerController@showBreakdown')->name('show_breakdown');
Route::get('/checkout', 'BurgerController@showCheckout')->name('show_checkout');


