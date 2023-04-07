<?php

use App\Http\Controllers\Admin\Edukasi\Video\VideoController;
use App\Http\Controllers\Admin\EdukasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Edukasi\WebinarController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/edukasi', [EdukasiController::class, 'index'])->name('edukasi');
Route::get('/edukasi/videos', [VideoController::class, 'index'])->name('videos.free');
Route::get('/edukasi/webinar', [WebinarController::class, 'index'])->name('webinar.index');


require __DIR__ . '/auth.php';
