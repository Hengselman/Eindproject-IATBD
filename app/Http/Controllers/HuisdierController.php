<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;

class HuisdierController extends Controller
{
    public function index(){
        return view('collectie.index',[
            'huisdier' => \App\Models\Huisdier::all()
        ]);
    }

    public function show($id){
        return view('collectie.show',[
            'huisdier' => \App\Models\Huisdier::find($id),
        ]);
    }
}
