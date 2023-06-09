<?php

use App\Http\Controllers\Admin\Edukasi\Video\VideoController;
use App\Http\Controllers\Admin\EdukasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Edukasi\Webinar\WebinarController;
use App\Http\Controllers\Creator\Kategori\CategoryController;
use App\Http\Controllers\Creator\Portofolio\PortofolioController;
use App\Http\Controllers\Creator\Skill\SkillController;
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
    Route::resource('/creator/pendidikan', PendidikanController::class);
    Route::resource('/creator/category', CategoryController::class);
});

Route::middleware('admin')->group(function () {
    Route::resource('/admin/videos', VideoController::class);
    Route::resource('/admin/webinar', WebinarController::class);
});

Route::middleware('marketplace')->group(function () {
    Route::get('/marketplace/home', function () {
        return view('marketplace.index');
    })->name('marketplace.dashboard');
    Route::resource('/marketplace/products', ProductController::class);
});

require __DIR__ . '/auth.php';
