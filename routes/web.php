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






// semua artwork (karya) frontPage
Route::get('/artworks', [ArtworkController::class, 'index']);
Route::get('/artworks/categories/{category:name}', [ArtworkController::class, 'getByCategory']);
Route::get('/artworks/{artwork:slug}', [ArtworkController::class, 'show']);
Route::post('/artworks/{artwork:slug}/buy', [ArtworkController::class, 'buy'])->middleware('auth');


// semua articles (artikel) frontPage
Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/show/{article:slug}', [ArticleController::class, 'show']);







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


