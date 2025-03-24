<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

use App\Models\Jobs;

Route::get('/', function () {
    // return view('home');
    $jobs = Jobs::all();
    dd($jobs);
});


Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Jobs::all()]);
        
});


Route::get('/jobs/{id}', function ($id) {
    $job = Jobs::find($id);

    if (! $job) {
        abort(404);
    }
    
    return view('job', ['job' => $job]);
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
