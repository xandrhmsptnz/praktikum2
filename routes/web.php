<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\LoginController;

// Route default dikomentari
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/praktikum3/welcome', function () {
	return 'Selamat datang di praktikum Laravel';
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan ID: '.$id;
});
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Ini halaman dashboard admin';
    });

    Route::get('/users', function () {
        return 'Ini halaman users admin';
    });
});

Route::get('/listbarang/{kode}/{nama}', [ListBarangController::class, 'show']);

Route::get('/login', [LoginController::class, 'index']);