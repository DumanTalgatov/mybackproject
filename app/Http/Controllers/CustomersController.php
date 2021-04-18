<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomersModels;

class CustomersController extends Controller
{
    public function index(){
        $customers_models = CustomersModels::all();
        return view('auth');
    }
    public function store(Request $request){
        $customers_models = new CustomersModels();

        $customers_models->first_name=$request->first_name;
        $customers_models->last_name=$request->last_name;
        $customers_models->email=$request->email;
        $customers_models->password=$request->password;
        
        $customers_models->save();
        return redirect()->route('auth');
    }
}
