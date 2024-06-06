<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::prefix('dashboard')->name('dashboard.')->group(function () {
        // Admin
        // Show All User
        Route::get('/user', [AdminController::class, 'index'])
            ->middleware('role:admin')
            ->name('admin');


        // User
        // Dashboard
        Route::resource('noteland', NoteController::class)
            ->middleware('role:user|admin');

        Route::get('/my-notes', [NoteController::class, 'show_note'])
            ->middleware('role:user|admin')
            ->name('noteland.my-notes');
    });
});

require __DIR__ . '/auth.php';
