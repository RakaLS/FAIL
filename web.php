<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ctrlPembayaran;
use App\Http\Controllers\data_pembayaran;


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
Route::resource('data_pembayaran',ctrlPembayaran::class);
