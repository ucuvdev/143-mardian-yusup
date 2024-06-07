<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AsnafController;
use App\Http\Controllers\WargaController;
use App\Http\Controllers\UpzController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\PenyaluranController;
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

Route::prefix('data-penerimaan')->group(function () {
    Route::get('/', function () {
        return view('penerimaan.index');
    })->middleware(['auth', 'verified'])->name('data-penerimaan');
});

Route::resource('penerimaan', PenerimaanController::class)->middleware(['auth', 'verified']);

Route::prefix('data-penyaluran')->group(function () {
    Route::get('/', function () {
        return view('penyaluran.index');
    })->middleware(['auth', 'verified'])->name('data-penyaluran');
});

Route::resource('penyaluran', PenyaluranController::class)->middleware(['auth', 'verified']);

Route::prefix('data-warga')->group(function () {
    Route::get('/', function () {
        return view('warga.index');
    })->middleware(['auth', 'verified'])->name('data-warga');
});

Route::resource('warga', WargaController::class)->middleware(['auth', 'verified']);

Route::prefix('data-asnaf')->group(function () {
    Route::get('/', function () {
        return view('asnaf.index');
    })->middleware(['auth', 'verified'])->name('data-asnaf');
});

Route::resource('asnaf', AsnafController::class)->middleware(['auth', 'verified']);

Route::prefix('profil-upz')->group(function () {
    Route::get('/', function () {
        return view('upz.index');
    })->middleware(['auth', 'verified'])->name('profil-upz');
});

Route::resource('upz', UpzController::class)->middleware(['auth', 'verified']);

require __DIR__ . '/auth.php';
