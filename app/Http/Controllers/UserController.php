<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id){
        return view('users.show',[
            'user' => \App\Models\User::find($id),
            'huisdier' => \App\Models\Huisdier::find($id)
        ]);
    }
}