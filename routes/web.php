<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;


Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('users-birthday', [UserController::class, 'indexBirthday'])->name('users.birthday');
Route::get('users-this-week-birthday', [UserController::class, 'thisWeekBirthday'])->name('users.thisWeekBirthday');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
