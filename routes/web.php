<?php

use App\Http\Controllers\Admin\Edukasi\Video\VideoController;
use App\Http\Controllers\Admin\EdukasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Edukasi\Webinar\WebinarController;
use App\Http\Controllers\Creator\Kategori\CategoryController;
use App\Http\Controllers\Creator\PortofolioController;
use App\Http\Controllers\Creator\SkillController;
use App\Http\Controllers\Creator\Pendidikan\PendidikanController;
use App\Http\Controllers\LandingController;
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

Route::get('/', [LandingController::class, 'home'])->name('home');
Route::get('/video', [LandingController::class, 'video'])->name('video');
Route::get('/creator', [LandingController::class, 'creator'])->name('creator');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/edukasi', [EdukasiController::class, 'index'])->name('edukasi');
    Route::get('/edukasi/videos', [VideoController::class, 'index'])->name('videos.index');
    Route::get('/edukasi/webinar', [WebinarController::class, 'index'])->name('webinar.index');
});

Route::middleware('creator')->group(function () {
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
    Route::get('/admin/edukasi/videos', [VideoController::class, 'create'])->name('videos.create');
    Route::post('/admin/edukasi/videos', [VideoController::class, 'store'])->name('videos.store');
    Route::get('/admin/edukasi/videos/{id}', [VideoController::class, 'edit'])->name('videos.edit');
    Route::put('/admin/edukasi/videos/update/{id}', [VideoController::class, 'update'])->name('videos.update');
    Route::get('/admin/edukasi/videos/delete/{id}', [VideoController::class, 'destroy'])->name('videos.destroy');

    Route::get('/admin/edukasi/webinar', [WebinarController::class, 'create'])->name('webinar.create');
    Route::post('/admin/edukasi/webinar', [WebinarController::class, 'store'])->name('webinar.store');
    Route::get('/admin/edukasi/webinar/{id}', [WebinarController::class, 'edit'])->name('webinar.edit');
    Route::put('/admin/edukasi/webinar/update/{id}', [WebinarController::class, 'update'])->name('webinar.update');
    Route::get('/admin/edukasi/webinar/delete/{id}', [WebinarController::class, 'destroy'])->name('webinar.destroy');
});







require __DIR__ . '/auth.php';
