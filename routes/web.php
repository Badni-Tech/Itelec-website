<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\Admin\DashboardController;

//WEBSITE DATA
Route::get('/', [CourseController::class, 'index'])->name('home');
Route::get('/training/{course}', [CourseController::class, 'show'])->name('training');
Route::view('/trainings', 'pages.trainings');
Route::view('/about', 'pages.about');
Route::view('/blogs', 'pages.blogs');

//ADMIN CRUD
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminCourseController::class, 'index'])->name('admin.dashboard');
    Route::get('/create', [AdminCourseController::class, 'create'])->name('admin.create');
    Route::post('/store', [AdminCourseController::class, 'store'])->name('admin.store');
    Route::get('/edit/{course}', [AdminCourseController::class, 'edit'])->name('admin.edit');
    Route::put('/update/{course}', [AdminCourseController::class, 'update'])->name('admin.update');
    Route::delete('/destroy/{course}', [AdminCourseController::class, 'destroy'])->name('admin.destroy');
});

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
