<?php

namespace App\Http\Controllers;

use App\Models\tutor;
use App\Models\tutorial;
use Illuminate\Http\Request;

class TutorController extends Controller
{
    //

    public function index(){
        $tutors=tutor::with('tutorial')->orderBy('created_at', 'desc')->paginate(10);
        return view('tutorials.index', ["tutors"=>$tutors]);
    }

    public function show(tutor $tutor){
        // $tutor=tutor::with('tutorial')->findorFail($id);
        $tutor->load('tutorial');
         return view("show", ["tutor"=>$tutor]);
    }

    public function create(){
        $tutorials=tutorial::all();
        return view('create', ['tutorials'=>$tutorials]);
    }

    public function store(Request $request){
        $valiated=$request->validate([
            'name'=>'required|string|max:255',
            'bio'=>'required|string|min:20|max:1000',
            'skill'=>'required|integer|min:0|max:100',
            'tutorial_id'=>'required|exists:tutorials,id'
        ]);

        tutor::create($valiated);

        return  redirect()->route('tutors.index')->with('success', 'tutor created');
    }

    public function destroy(tutor $tutor){
     
        $tutor->delete();

        return redirect()->route('tutors.index')->with('success', 'tutor deleted');
    }
}
