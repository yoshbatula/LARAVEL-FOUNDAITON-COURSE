<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Jobs {
   public static function all () {
         return [
              [
                'id'=> 1,
                'title' => 'Web Developer',
                'company' => 'Google',
                'salary' => '100k'
              ],
              [
                'id'=> 2,
                'title' => 'Backend Developer',
                'company' => 'Facebook',
                'salary' => '90k'
              ]
         ];
   }
    
}

Route::get('/', function () {
    return view('home');
    
});


Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Jobs::all()]);
        
});


Route::get('/jobs/{id}', function ($id) {
    $job = Arr::first(Jobs::all(), fn($job) => $job['id'] == $id);
    
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
