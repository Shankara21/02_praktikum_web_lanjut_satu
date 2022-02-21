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
    echo "Selamat datang!";
});
Route::get('/about', function () {
    echo "Muhammad Lazuardi Timur (2041720114)";
});
Route::get('/article/{id}', function ($id) {
    echo "Halaman artikel dengan id $id";
});
