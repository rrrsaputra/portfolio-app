<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'show']);

// Route::get('/about', function () {
//     return view('about', ['title' => 'About']);
// });

Route::get('/portfolio', function () {
    return view('portfolio', ['title' => 'Portfolio']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/skills', SkillController::class);
    Route::resource('/projects', ProjectController::class);
    Route::resource('/experiences', ExperienceController::class);
    Route::resource('/educations', EducationController::class);
    Route::resource('/abouts', AboutController::class);
});




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
