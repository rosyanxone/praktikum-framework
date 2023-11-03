<?php

use App\Models\Dosen;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login/action', [
    AuthController::class, 'loginAction'
])->name('login.action');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post('/register/action', [
    AuthController::class, 'registerAction'
])->name('register.action');

Route::get('/logout', [
    AuthController::class, 'logout'
])->name('logout');

Route::middleware('auth')->group(function () {
    Route::get('/staff/dashboard', function () {
        return view('staff.dashboard');
    })->name('staff.dashboard');

    // Route::get('/staff/mahasiswa', function () {
    //     return view('staff.mahasiswa', [
    //         'mahasiswa' => Mahasiswa::all(),
    //     ]);
    // })->name('staff.mahasiswa');

    Route::get('/staff/dosen', function () {
        return view('staff.dosen', [
            'dosen' => Dosen::all()
        ]);
    })->name('staff.dosen');

    Route::get('/staff/kelas', function () {
        return view('staff.kelas');
    })->name('staff.kelas');

    Route::get('/staff/pesan', function () {
        return view('staff.pesan');
    })->name('staff.pesan');



    Route::controller(MahasiswaController::class)->group(function(){
        Route::get('/staff/mahasiswa','index')->name('staff.mahasiswa');
        Route::get('/staff/mahasiswa/tambah', 'tambah')->name('staff.add');
        Route::post('/staff/mahasiswa/tambah/action','store')->name('staff.store');
        Route::get('/staff/mahasiswa/edit/{id}', 'edit')->name('staff.edit');
        Route::post('/staff/mahasiswa/edit/{id}/action', 'update')->name('staff.update');
        Route::post('/staff/mahasiswa/delete/{id}/action', 'delete')->name('staff.delete');
    });
});


