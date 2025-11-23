<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

Route::get('/pendaftaran', function () {
    return view('pendaftaran.index');
})->name('pendaftaran');

Route::get('/pemeriksaan/poli-umum', function () {
    return view('pemeriksaan.poli-umum.index');
});

Route::get('/pemeriksaan/poli-gigi', function () {
    return view('pemeriksaan.poli-gigi.index');
});

Route::get('/pemeriksaan/poli-kia', function () {
    return view('pemeriksaan.poli-kia.index');
});

Route::get('/pemeriksaan/rawat-inap', function () {
    return view('pemeriksaan.rawat-inap.index');
});

Route::get('/pemeriksaan/ugd', function () {
    return view('pemeriksaan.ugd.index');
});

Route::get('/pembayaran', function () {
    return view('pembayaran.index');
})->name('pembayaran');

Route::get('/persuratan', function () {
    return view('persuratan.index');
})->name('persuratan');

Route::get('/rekam-medis', function () {
    return view('rekam-medis.index');
})->name('rekam-medis');

Route::get('/laporan', function () {
    return view('laporan.index');
})->name('laporan');