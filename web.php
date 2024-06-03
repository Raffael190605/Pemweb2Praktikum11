<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Method HTTP:
 * 1. Get = Menampilkan halaman
 * 2. Post = mengirim data
 * 3. Put = meng-update data
 * 4. Delete = mengapus data
 */

// route untuk menampilkan teks
Route::get('/salam/{nama}', function ($nama) {
    return "Assalamualaikum $nama";
});

Route::get('admin/dashboard', [DashboardController::class, 'index']);

// route untuk menamplilkan student
Route::get('admin/student', [StudentController::class, 'index']);

Route::get('admin/student/create', [StudentController::class, 'create']);

// Route untuk mengirim data student
Route::post('admin/student/store', [StudentController::class, 'store']);
