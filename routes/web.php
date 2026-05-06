<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

use Illuminate\Support\Facades\Route;

// Halaman Beranda
Route::get('/', function () {
    return view('welcome');
});

// Halaman Tentang Kami
Route::get('/tentang', function () {
    return view('about');
});

// Halaman Layanan
Route::get('/layanan', function () {
    return view('services');
});