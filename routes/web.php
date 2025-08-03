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

Route::get('/tutors',[TutorController::class, 'index'] )->name('tutors.index');

Route::get("/tutors/{id}", [TutorController::class, 'show'])->name('tutors.show');

Route::get('/tutors/create',[TutorController::class, 'create'])->name('tutors.create');

Route::get('/tutorial', function(){
    return view('tutorials.tutorial.index');
});
