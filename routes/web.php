<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});



Route::get('/tutorials', function(){
    $tutors=[["name"=>"net ninja", "id"=>1], ["name"=>"travesly media", "id"=>2]];
    return view('tutorials.index', ["name"=>"net ninja", "tutors"=>$tutors]);
});

Route::get("/tutorials/{id}", function($id){
        return view("show", ["id"=>$id]);
});

Route::get('/tutorial', function(){
    return view('tutorials.tutorial.index');
});
