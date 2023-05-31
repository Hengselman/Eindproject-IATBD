<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Exception;
use App\Models\Huisdier;

class HuisdierController extends Controller
{
    public function index(){
        return view('collectie.index',[
            'huisdier' => Huisdier::all(),
            'huisdier' => Huisdier::where('zoekt_oppas',1)->get()
        ]);
    }

    public function show($id){

        $huisdier = Huisdier::findOrFail($id);
        $reviews = $huisdier->reviews()->get();

        return view('collectie.show',[
            'huisdier' => $huisdier,
            'user' => Auth::user(),
            'reviews' => $reviews
        ]);
    }

    public function create(){
        return view('collectie.create',[
            'huisdier' => Huisdier::all()
        ]);
    }

    public function destroy($id){
        $huisdier = Huisdier::where('id', $id)->firstorfail()->delete();
        echo ("Huisdier succesvol verwijdert");
        return redirect()->route('collectie.index');
    }


    public function store(Request $request, Huisdier $huisdier){
        $huisdier->name = $request->input('name');
        $huisdier->soort = $request->input('soort');
        $huisdier->description = $request->input('description');
        $huisdier->eigenaar_id = $request->user()->id;
        $huisdier->eigenaar_name = $request->user()->name;
       
        /* Image validation */

        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
        ]);

        $huisdier->image = $request->file('image')->store('img', 'public');

        $huisdier->wanneer = $request->input('wanneer');
        $huisdier->hoeveel_dagen = $request->input('hoeveel_dagen');
        $huisdier->uurtarief = $request->input('uurtarief');
        $huisdier->belangrijke_info = $request->input('belangrijke_info');
        
        try{
            $huisdier->save();
            return redirect('/collectie');
        }
        catch(Exception $e){
            error_log("Werkt niet");
            return redirect('/collectie/create');
        }
        
    }
}
