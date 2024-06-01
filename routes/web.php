<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', 'dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('penerimaan')->group(function () {
    Route::get('/', function () {
        return view('penerimaan.index');
    })->middleware(['auth', 'verified'])->name('penerimaan');
});

Route::prefix('penyaluran')->group(function () {
    Route::get('/', function () {
        return view('penyaluran.index');
    })->middleware(['auth', 'verified'])->name('penyaluran');
});

Route::prefix('data-warga')->group(function () {
    Route::get('/', function () {
        return view('warga.index');
    })->middleware(['auth', 'verified'])->name('data-warga');
});

Route::prefix('data-asnaf')->group(function () {
    Route::get('/', function () {
        return view('asnaf.index');
    })->middleware(['auth', 'verified'])->name('data-asnaf');
});

Route::prefix('profil-upz')->group(function () {
    Route::get('/', function () {
        return view('upz.index');
    })->middleware(['auth', 'verified'])->name('profil-upz');
});

require __DIR__.'/auth.php';
