<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Huisdier;
use App\Models\Aanmelding;

class UserController extends Controller
{
    public function index(){
        return view('users.index',[
            'user' => User::all()
        ]);
    }
    
    public function show($id){

        $huisdierVar = Huisdier::where('eigenaar_id', $id)->value('name');
        $huisdierTest1 = "Test";



        return view('users.show',[
            'user' => User::find($id),
            'huisdier' => Huisdier::where('eigenaar_id',$id)->get(),
            'currentUser' => Auth::user(),
            'aanmelding' => Aanmelding::where('user_id', $id)->get(),
            'huisdierVar' => $huisdierVar,
            'huisdierTest1' => $huisdierTest1,

        ]);
    }

    public function destroy($id){
        $user = User::where('id', $id)->firstorfail()->delete();
        echo ("Gebruiker succesvol verwijdert");
        return redirect()->route('users.index');
    }
}
