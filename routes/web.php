<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
    
});

Route::get('/jobs', function () {
    return view('jobs', [
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

Route::get('/contact', function () {
    return view('contact', [
        'contacts' => [
            [
                'name' => 'John Doe',
                'email' => 'jd@edu.ph'
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'janedoe@edu.ph'
            ]   
        ] 
    ]);
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
