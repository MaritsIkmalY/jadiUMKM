<?php

use App\Http\Controllers\Admin\Edukasi\Video\VideoController;
use App\Http\Controllers\Admin\EdukasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Edukasi\Webinar\WebinarController;
use App\Http\Controllers\Creator\Kategori\CategoryController;
use App\Http\Controllers\Creator\PortofolioController;
use App\Http\Controllers\Creator\SkillController;
use App\Http\Controllers\Creator\Pendidikan\PendidikanController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\Marketplace\Product\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/landing/edukasi/video', [LandingController::class, 'video'])->name('video');

Route::get('/landing/creator', [LandingController::class, 'creator'])->name('creator');
Route::get('/landing/edukasi', [LandingController::class, 'edukasi'])->name('edukasi');
Route::get('/landing/edukasi/webinar', [LandingController::class, 'webinar'])->name('webinar');
Route::get('/landing/creator/detail/{id}', [LandingController::class, 'creatorDetail'])->name('creator.detail');
Route::get('/landing/creator/filter', [FilterController::class, 'getCreatorByFilter'])->name('filter');
Route::get('/landing/katalog', [LandingController::class, 'katalog'])->name('katalog');
Route::get('/landing/katalog/{id}', [LandingController::class, 'katalogDetail'])->name('katalog-detail');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/edukasi/login', [EdukasiController::class, 'index'])->name('edukasi.index');
    Route::get('/edukasi/videos', [VideoController::class, 'index'])->name('videos.index');
    Route::get('/edukasi/webinar', [WebinarController::class, 'index'])->name('webinar.index');
});

Route::middleware('creator')->group(function () {
    Route::get('/creator/home', function () {
        return view('creator.index');
    })->name('creator.dashboard');
    Route::resource('/creator/portofolio', PortofolioController::class);
    Route::resource('/creator/skill', SkillController::class);

    Route::get('/creator/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan');
    Route::get('/creator/pendidikan/create', [PendidikanController::class, 'create'])->name('pendidikan.create');
    Route::post('/creator/pendidikan/create', [PendidikanController::class, 'store'])->name('pendidikan.store');
    Route::get('/creator/pendidikan/{id}', [PendidikanController::class, 'edit'])->name('pendidikan.edit');
    Route::put('/creator/pendidikan/update/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update');
    Route::get('/creator/pendidikan/delete/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy');

    Route::get('/creator/category', [CategoryController::class, 'index'])->name('kategori');
    Route::post('/creator/category/create', [CategoryController::class, 'store'])->name('kategori.store');
    Route::get('/creator/category/{id}', [CategoryController::class, 'edit'])->name('kategori.edit');
    Route::put('/creator/category/update/{id}', [CategoryController::class, 'update'])->name('kategori.update');
    Route::get('/creator/category/delete/{id}', [CategoryController::class, 'destroy'])->name('kategori.destroy');
});

Route::middleware('admin')->group(function () {
    Route::resource('/admin/videos', VideoController::class);
    Route::resource('/admin/webinar', WebinarController::class);
});

Route::middleware('marketplace')->group(function () {
    Route::get('/marketplace/home', function () {
        return view('marketplace.index');
    })->name('marketplace.dashboard');
    Route::resource('/marketplace/produk', ProductController::class);
});

require __DIR__ . '/auth.php';
