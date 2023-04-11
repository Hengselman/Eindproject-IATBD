<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.index',[
            'user' => \App\Models\User::all()
        ]);
    }
    
    public function show($id){
        return view('users.show',[
            'user' => \App\Models\User::find($id),
            'huisdier' => \App\Models\Huisdier::where('eigenaar_id',$id)->get()
        ]);
    }
}
