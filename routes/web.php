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



/// coba




Route::get('/', function () {
    return view('index', [
        "title" => "Home"
    ]);
});

Route::get('/login', function () {
    return view('auth/login', [
        "title" => "Login"
    ]);
});

Route::get('/register', function () {
    return view('auth/register', [
        "title" => "Register"
    ]);
});

Route::get('/forgot-password', function () {
    return view('auth/forgot-password', [
        "title" => "Lupa Password"
    ]);
});

Route::get('/post', function () {
    return view('post', [
        "title" => "Artikel"
    ]);
});

Route::get('/post-single', function () {
    return view('post-single', [
        "title" => "Detail Artikel"
    ]);
});

Route::get('/event', function () {
    return view('event', [
        "title" => "Event"
    ]);
});

Route::get('/event-single', function () {
    return view('event-single', [
        "title" => "Detail Event"
    ]);
});

Route::get('/lukisan', function () {
    return view('lukisan', [
        "title" => "Karya Lukisan"
    ]);
});

Route::get('/patung', function () {
    $karyas = [
        [
            "judul" => "selacar dilaaut",
            "gambar" => "selancar",
            "bahan" => "kanvas",
            "ukuran" => "100",
            "ukuran" => "100",
            "tahun" => "2012",
            "deskripsi" => "lukisan selancar",
        ]
        ];

    return view('patung', [
        "title" => "Karya Patung",
        "karyas" => $karyas
    ]);
});

Route::get('/karya-single', function () {
    return view('karya-single', [
        "title" => "Detail Karya"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About"
    ]);
});

Route::get('/dashboard', function () {
    return view('dashboard', [
        "title" => "Dashboard"
    ]);
});


Route::get("/pemesanan", function () {
    return view("pemesanan", [
        "title" => "Pemesanan"
    ]);
});

Route::get("/buatpesanan", function () {
    return view("buatpesanan", [
        "title" => "Buat Pesanan"
    ]);
});

Route::get("/profil/edit", function () {
    return view("editprofil", [
        "title" => "Edit Profil"
    ]);
});

Route::get("/profil", function () {
    return view("profil", [
        "title" => "Profil"
    ]);
});




