<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ArticleController;

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

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/show/{article:id}', [ArticleController::class, 'show']);

Route::get('/events', [EventController::class, 'index']);
Route::get('/events/show/{event:slug}', [EventController::class, 'show']);


Route::get('/lukisan', function () {
    return view('lukisan', [
        "title" => "Karya Lukisan"
    ]);
});

Route::get('/patung', function () {
    return view('patung', [
        "title" => "Karya Patung"
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


Route::get("/admin/buat-karya", function () {
    return view("admin.buat_karya", [
        "title" => "Buat Karya"
    ]);
});

Route::get("/admin/dashboard-admin", function () {
    return view("admin.dashboard_admin", [
        "title" => "Dashboard Admin"
    ]);
});


Route::get("/admin/edit-karya", function () {
    return view("admin.edit_karya", [
        "title" => "Edit Karya"
    ]);
});

Route::get("/admin/edit-pesanan", function () {
    return view("admin.edit_pesanan", [
        "title" => "Edit Pesanan"
    ]);
});

Route::get("/admin/articles", [ArticleController::class, "indexAdmin"]);
Route::get("/admin/articles/edit/{article:id}", [ArticleController::class, 'editAdmin']);
Route::put("/admin/articles/update/{article:id}", [ArticleController::class, 'updateAdmin']);
Route::get("/admin/articles/create", [ArticleController::class, "createAdmin"]);
Route::post("/admin/articles/store", [ArticleController::class, "storeAdmin"]);
Route::delete("/admin/articles/delete/{article:id}", [ArticleController::class, "destroyAdmin"]);

Route::get("/admin/events", [EventController::class, "indexAdmin"]);
Route::get("/admin/events/create", [EventController::class, "createAdmin"]);
Route::post("/admin/events/store", [EventController::class, "storeAdmin"]);
Route::get("/admin/events/edit/{event:slug}", [EventController::class, 'editAdmin']);
Route::put("/admin/events/update/{event:slug}", [EventController::class, 'updateAdmin']);
Route::delete("/admin/events/delete/{event:slug}", [EventController::class, "destroyAdmin"]);

Route::get("/admin/events/checkSlug", [EventController::class, "checkSlug"]);

Route::get("/admin/table-event", function () {
    return view("admin.table_event", [
        "title" => "Table Event"
    ]);
});

Route::get("/admin/table-karya", function () {
    return view("admin.table_karya", [
        "title" => "Table Karya"
    ]);
});

Route::get("/admin/table-pesanan", function () {
    return view("admin.table_pesanan", [
        "title" => "Table Pesanan"
    ]);
});
