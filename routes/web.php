<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'jobs' => [
            [
                'title' => 'Web Developer',
                'company' => 'Google',
                'salary' => '100k'
            ],
            [
                'title' => 'Backend Developer',
                'company' => 'Facebook',
                'salary' => '90k'
            ]
        ]
    ]);
    
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
