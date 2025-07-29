<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
    return view('about');
});

// wildcats

Route::get('/tutorials', function(){
    $tutorials=[["title"=>"Laravel full course", "tutor"=>" travesly media", "duration"=>2, "id"=>1], 
              ["title"=>"React full course for beginers", "tutor"=>"net ninja", "duration"=>1,"id"=>2],
              ["title"=>"Node intermidiate course", "tutor"=>"net ninja", "duration"=>3, "id"=>3], 
              ["title"=>"Express full course", "tutor"=>"travesly media", "duration"=>1, "id"=>4]
];
    return view('tutorials.index', ["name"=>"net", "tutorials"=>$tutorials]);
});

Route::get("/tutorial/{id}", function($id){
        return view("show", ["id"=>$id]);
});

Route::get('/tutorial', function(){
    return view('tutorials.tutorial.index');
});
