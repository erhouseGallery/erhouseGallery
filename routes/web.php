<?php

use App\Http\Controllers\CobaController as coba;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/coba/{coba}', function($coba) {
//     return "nama saya : $coba";
// });


// Route::get('/', [coba::class, 'index']);


Route::get('/dashboard', function() {
    return view('layouts.dashboard');
});


Route::get("/pemesanan", function() {
    return view("layouts.pemesanan");
});

Route::get("/pemesanan/buatpesanan", function() {
    return view("layouts.buatpesanan");
});

Route::get("/profil/edit", function() {
    return view("layouts.editprofil");
});

Route::get("/profil", function() {
    return view("layouts.profil");
});


Route::get("/navbar", function() {
    return view("layouts.navbar");
});

