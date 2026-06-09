<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\Admin\CarsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

// Home routes
Route::get('/', [CarsController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home.dashboard');


Route::resource('admin/cars', CarsController::class)->names('admin.cars');

// Categories Route
Route::resource('categories', CategoryController::class);

// Authenticatie Routes (één keer is genoeg)
Auth::routes();

// Dashboard & Instellingen
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
