<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

// ==========================================
// RUTE HALAMAN PUBLIK (Bisa diakses siapa saja)
// ==========================================

// Halaman Home
Route::get('/', function () {
    return view('home');
});

// Halaman Profil Sekolah
Route::get('/profil', function () {
    return view('profil'); // Pastikan Anda membuat file profil.blade.php
});

// Halaman Form Pendaftaran
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

// Halaman Informasi Pendaftaran
Route::get('/informasi-pendaftaran', function () {
    return view('informasi-pendaftaran');
});
// Rute untuk memproses form pendaftaran (POST)
// Karena fokus Anda di Front-End, ini hanya simulasi *redirect* kembali dengan pesan sukses
Route::post('/submit-pendaftaran', function (Request $request) {
    // Di sini nantinya logika Back-End untuk menyimpan data ke database
    // ...
    
    // Simulasi kembali ke halaman pendaftaran dengan pesan sukses
    return back()->with('success', 'Pendaftaran berhasil dikirim!');
});


// ==========================================
// RUTE HALAMAN ADMIN (Harus Login / Terlindungi Middleware Breeze)
// ==========================================

Route::middleware(['auth', 'verified'])->group(function () {
    
    // Halaman Dashboard Admin
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Halaman Data Pendaftar
   Route::get('/data-pendaftar', function () {
        return view('data-pendaftar'); // <-- Mengarah ke file data-pendaftar.blade.php yang baru
    })->name('data-pendaftar');

    // Halaman Detail Pendaftar (BARU)
    Route::get('/detail-pendaftar', function () {
        return view('detail-pendaftar');
    })->name('detail-pendaftar');

});

// File routing bawaan Laravel Breeze untuk Login, Register, Logout, dll
require __DIR__.'/auth.php';