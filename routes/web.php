<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/tutorials', function(){
    return view('tutorials.index');
});

Route::get('/tutorial', function(){
    return view('tutorials.tutorial.index');
});
