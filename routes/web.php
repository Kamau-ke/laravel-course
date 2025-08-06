<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TutorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});

// wildcats
Route::get('/tutors/create',[TutorController::class, 'create'])->name('tutors.create');
Route::get('/tutors',[TutorController::class, 'index'] )->name('tutors.index');
Route::get("/tutors/{tutor}", [TutorController::class, 'show'])->name('tutors.show');
Route::post('/tutors',[TutorController::class, 'store'] )->name('tutors.store');
Route::delete("/tutors/{tutor}", [TutorController::class, 'destroy'])->name('tutors.destroy');

Route::get('/tutorial', function(){
    return view('tutorials.tutorial.index');
});
