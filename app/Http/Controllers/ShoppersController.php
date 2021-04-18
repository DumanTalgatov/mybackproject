<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppersModels;

class ShoppersController extends Controller
{
    public function index(){
        $accounts = ShoppersModels::all();
        return view('auth')->with(['accounts'=>$accounts]);
    }
    public function store(Request $request){
        $shoppers_models = new ShoppersModels();
        $shoppers_models->email=$request->email;
        $shoppers_models->password=$request->password;
        $shoppers_models->save();
        return redirect()->route('auth');
    }
}
