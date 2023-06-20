<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontPage\ArticleController;
use App\Http\Controllers\FrontPage\ArtworkController;
use App\Http\Controllers\Auth\AuthController;
// use App\Models\Article;

use App\Http\Controllers\Dashboard\DashboardOrderController;
use App\Http\Controllers\Dashboard\DashboardArtworkController;
use App\Http\Controllers\Dashboard\DashboardArticleController;
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




Route::get('/', function () {
    return view('index', [
        "title" => "Home"
    ]);
});




// Register
Route::get('/register', function () {
    return view('auth/register', [
        "title" => "Register"
    ]);
});

Route::post('/register', [AuthController::class, 'store'])->middleware('guest');


//login
Route::get('/login', [AuthController::class,'indexLogin'])->name('login')->middleware('guest');

Route::post('/login', [AuthController::class, 'authenticate']);

//logout
Route::post('/logout', [AuthController::class, 'logout']);



// Route::get('/forgot-password', function () {
//     return view('auth/forgot-password', [
//         "title" => "Lupa Password"
//     ]);
// });



// semua artwork (karya) frontPage
Route::get('/artworks', [ArtworkController::class, 'index']);
Route::get('/artworks/{artwork:slug}', [ArtworkController::class, 'show']);


// semua articles (artikel) frontPage
Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/show/{article:slug}', [ArticleController::class, 'show']);

// Route::get('/event', function () {
//     return view('event', [
//         "title" => "Event"
//     ]);
// });

// Route::get('/event-single', function () {
//     return view('event-single', [
//         "title" => "Detail Event"
//     ]);
// });



// Route::get('/about', function () {
//     return view('about', [
//         "title" => "About"
//     ]);
// });

// Route::get('/dashboard', function () {
//     return view('dashboard', [
//         "title" => "Dashboard"
//     ]);
// });


// Route::get("/pemesanan", function () {
//     return view("pemesanan", [
//         "title" => "Pemesanan"
//     ]);
// });

// Route::get("/buatpesanan", function () {
//     return view("buatpesanan", [
//         "title" => "Buat Pesanan"
//     ]);
// });

// Route::get("/profil/edit", function () {
//     return view("editprofil", [
//         "title" => "Edit Profil"
//     ]);
// });

// Route::get("/profil", function () {
//     return view("profil", [
//         "title" => "Profil"
//     ]);
// });


// Route::get("/admin/buat-event", function () {
//     return view("admin.buat_event", [
//         "title" => "Buat Event"
//     ]);
// });





// dashboard admin
Route::get('/admin/dashboard-admin',[AdminController::class, 'index'])->middleware('auth');


// dashboard karya admin
// Route::resource('/admin/artworks', DashboardArtworkController::class)->middleware('auth');
Route::get('/admin/artworks/checkSlug', [DashboardArtworkController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/artworks', DashboardArtworkController::class)->middleware('admin');

//dasboard articles admin
Route::get('/admin/articles/checkSlug', [DashboardArticleController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/articles',DashboardArticleController::class)->middleware('admin');

//dasboard order admin
Route::resource('/admin/orders',DashboardOrderController::class)->middleware('auth');


// Route::get("/admin/edit-event", function () {
//     return view("admin.edit_event", [
//         "title" => "Edit Event"
//     ]);
// });

// Route::get("/admin/edit-karya", function () {
//     return view("admin.edit_karya", [
//         "title" => "Edit Karya"
//     ]);
// });

// Route::get("/admin/edit-pesanan", function () {
//     return view("admin.edit_pesanan", [
//         "title" => "Edit Pesanan"
//     ]);
// });

// Route::get("/admin/articles", [ArticleController::class, "indexAdmin"]);
// Route::get("/admin/articles/edit/{article:id}", [ArticleController::class, 'editAdmin']);
// Route::put("/admin/articles/update/{article:id}", [ArticleController::class, 'updateAdmin']);
// Route::get("/admin/articles/create", [ArticleController::class, "createAdmin" ] );
// Route::post("/admin/articles/store", [ArticleController::class, "storeAdmin" ] );
// Route::delete("/admin/articles/delete/{article:id}", [ArticleController::class, "destroyAdmin" ] );

// Route::get("/admin/table-event", function () {
//     return view("admin.table_event", [
//         "title" => "Table Event"
//     ]);
// });



// Route::get("/admin/table-pesanan", function () {
//     return view("admin.table_pesanan", [
//         "title" => "Table Pesanan"
//     ]);
// });
