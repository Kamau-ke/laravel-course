<?php

namespace App\Http\Controllers;

use App\Models\tutor;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    //

    public function index(){
        $tutors=tutor::orderBy('created_at', 'desc')->paginate(10);
        return view('tutorials.index', ["tutors"=>$tutors]);
    }

    public function show($id){
        $tutor=tutor::findorFail($id);
         return view("show", ["tutor"=>$tutor]);
    }

    public function create(){
        return view("create");
    }

    public function store(){

    }
}
