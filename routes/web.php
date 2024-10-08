<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\AdminAboutController;
use Illuminate\Support\Facades\Auth;


Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'home']);
Route::get('/tentang', [HomeController::class, 'tentang']);
Route::get('/berita', 'NewsController@berita')->name('berita');
Route::get('/berita', [NewsController::class, 'berita'])->name('berita');
Route::get('/berita/{id}', [NewsController::class, 'show'])->name('berita.show');
Route::get('/image', [HomeController::class, 'image']);
Route::get('/kontak', [HomeController::class, 'kontak']);

// List Berita
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

// Tambah Berita
Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
Route::post('/news', [NewsController::class, 'store'])->name('news.store');

// Edit Berita
Route::get('/news/{id}/edit', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/{id}', [NewsController::class, 'update'])->name('news.update');

// Hapus Berita
Route::delete('/news/{id}', [NewsController::class, 'destroy'])->name('news.destroy');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('login'); // Arahkan ke halaman utama setelah logout
})->name('logout');

Route::resource('galeri', GaleriController::class);
Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
Route::post('/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
Route::put('/galeri/{galeri}', [GaleriController::class, 'update'])->name('galeri.update');
Route::get('/galeri/{galeri}', [GaleriController::class, 'show'])->name('galeri.show');
Route::get('galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
Route::post('galeri', [GaleriController::class, 'store'])->name('galeri.store');
Route::delete('/galeri/{id}/destroy', [GaleriController::class, 'destroy'])->name('galeri.destroy');

// Home Route
Route::get('/home', [HomeController::class, 'index'])->name('home');

// News Route
Route::get('/news', [NewsController::class, 'index'])->name('news.index');

// Galeri Route
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/image', [GaleriController::class,'gallery'])->name('galeri.gallery');
//Edit Visi Misi
Route::get('/admin/about/edit', [AdminAboutController::class, 'edit'])->name('admin.about.edit'); // Untuk halaman edit (GET)
Route::put('/admin/about/update', [AdminAboutController::class, 'update'])->name('admin.about.update'); // Menggunakan metode PUT untuk update