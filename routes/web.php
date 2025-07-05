<?php

use App\Http\Controllers\AdminSekolahController;
use App\Http\Controllers\ControllerSiswa;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileSekolahController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileSekolahController::class,'index'])->name('profile.home');

Route::middleware('auth')->group(function () {
Route::get('/home', [ControllerSiswa::class, 'index'])->name('siswa.home');
Route::get('/inputform', [ControllerSiswa::class, 'create'])->name('siswa.inputForm');
Route::post('/input', [ControllerSiswa::class, 'store'])->name('siswa.input');
Route::get('/edit/{id}', [ControllerSiswa::class, 'edit'])->name('siswa.edit');
Route::put('/update/{id}', [ControllerSiswa::class, 'update'])->name('siswa.update');
});

Route::middleware(['auth', 'role:1'])->group(function () {
Route::get('/admin/home', [AdminSekolahController::class, 'index'])->name('admin.home');
Route::get('/admin/class', [AdminSekolahController::class, 'class'])->name('admin.class');
Route::get('/admin/create/class', [AdminSekolahController::class, 'create'])->name('admin.createClass');
Route::post('/admin/store/class', [AdminSekolahController::class, 'store'])->name('admin.storeClass');
Route::get('/admin/detail/class/{id}', [AdminSekolahController::class, 'show'])->name('admin.detailClass');
Route::get('/admin/edit/class/{id}', [AdminSekolahController::class, 'edit'])->name('admin.editClass');
Route::put('/admin/update/class/{id}', [AdminSekolahController::class, 'update'])->name('admin.updateClass');
Route::get('/admin/delete/class/{id}', [AdminSekolahController::class, 'destroy'])->name('admin.deleteClass');
Route::get('/admin/siswa', [AdminSekolahController::class, 'indexSiswa'])->name('admin.siswa');
Route::get('/admin/edit/siswa/{id}', [AdminSekolahController::class, 'editSiswa'])->name('admin.editSiswa');
Route::put('/admin/update/siswa/{id}', [AdminSekolahController::class, 'updateSiswa'])->name('admin.updateSiswa');
Route::get('/admin/delete/siswa/{id}', [AdminSekolahController::class, 'destroySiswa'])->name('admin.deleteSiswa');
Route::get('/admin/profile/sekolah', [ProfileSekolahController::class, 'show'])->name('admin.showProfile');
Route::get('/admin/edit/profile/{id}', [ProfileSekolahController::class, 'edit'])->name('admin.editProfile');
Route::put('/admin/update/profile/{id}', [ProfileSekolahController::class, 'update'])->name('admin.updateProfile');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
