<?php
use App\Http\Controllers\PageController;
use App\Http\Controllers\SinhVienController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'showHomepage']);
//Route::get('/about', [PageController::class, 'showHomepage']);
// Hiển thị danh sách sinh viên
Route::get('/sinhvien', [SinhVienController::class, 'index'])
    ->name('sinhvien.index');

// Lưu sinh viên mới
Route::post('/sinhvien', [SinhVienController::class, 'store'])
    ->name('sinhvien.store');