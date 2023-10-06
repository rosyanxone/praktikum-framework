<?php

use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.auth');
})->name('login');

Route::get('/staff/dashboard', function () {
    return view('staff.dashboard');
})->name('staff.dashboard');

Route::get('/staff/mahasiswa', function () {
    return view('staff.mahasiswa', [
        'mahasiswa' => Mahasiswa::all()
    ]);
})->name('staff.mahasiswa');

Route::get('/staff/dosen', function () {
    return view('staff.dosen');
})->name('staff.dosen');

Route::get('/staff/kelas', function () {
    return view('staff.kelas');
})->name('staff.kelas');

Route::get('/staff/pesan', function () {
    return view('staff.pesan');
})->name('staff.pesan');

