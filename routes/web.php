<?php

use App\Models\Mahasiswa;
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
    return view('home');
});

Route::get('/auth', function () {
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

