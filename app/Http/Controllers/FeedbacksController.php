<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeedbacksModels;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoEmail;

class FeedbacksController extends Controller
{
    public function index(){
        return view('contacts');
    }
    public function store(Request $request){
        $feedbacks_models = new FeedbacksModels();

            $feedbacks_models->review=$request->review;
            $feedbacks_models->name=$request->name;
            $feedbacks_models->email=$request->email;
            $feedbacks_models->topic=$request->topic;
            $feedbacks_models->image=$request->file('image')->getClientOriginalName();
            $request->file('image')->storeAs('public/images/', $feedbacks_models->image);
            $feedbacks_models->save();
        Mail::to($request->email)->send(new DemoEmail($feedbacks_models));
        return redirect()->route('contacts');
    }
}
