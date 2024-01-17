<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\ProgramController::class, 'index'])->name('home');

// program
Route::get('/program', [\App\Http\Controllers\ProgramController::class, 'program'])->name('program');

//about
Route::get('/about', function () {
    return view('frontend.about');
});


// schedule
// Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');



    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\ProgramController::class, 'adminDashboard'])->name('dashboard');
    });



    Route::middleware('auth')->group(function () {
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



        Route::post('/user-program', [\App\Http\Controllers\ProgramController::class, 'userProgram'])->name('frontend.userProgram');

        Route::get('/schedule/{dietTypeId}', [\App\Http\Controllers\ProgramController::class, 'userSchedule'])->name('schedule');
    });

require __DIR__.'/auth.php';
