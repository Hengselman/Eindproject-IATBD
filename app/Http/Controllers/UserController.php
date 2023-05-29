<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'huisdier' => \App\Models\Huisdier::where('eigenaar_id',$id)->get(),
            'currentUser' => Auth::user()
        ]);
    }

    public function destroy($id){
        $user = \App\Models\User::where('id', $id)->firstorfail()->delete();
        echo ("Gebruiker succesvol verwijdert");
        return redirect()->route('users.index');
    }
}
