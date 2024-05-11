<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', 'dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::prefix('penerimaan')->group(function () {
    Route::get('/', function () {
        return view('penerimaan.index');
    })->name('penerimaan');
});

Route::prefix('penyaluran')->group(function () {
    Route::get('/', function () {
        return view('penyaluran.index');
    })->name('penyaluran');
});

Route::prefix('data-warga')->group(function () {
    Route::get('/', function () {
        return view('warga.index');
    })->name('data-warga');
});

Route::prefix('data-asnaf')->group(function () {
    Route::get('/', function () {
        return view('asnaf.index');
    })->name('data-asnaf');
});

Route::prefix('profil-upz')->group(function () {
    Route::get('/', function () {
        return view('upz.index');
    })->name('profil-upz');
});

Route::prefix('pengguna')->group(function () {
    Route::get('/', function () {
        return view('pengguna.index');
    })->name('pengguna');
});
