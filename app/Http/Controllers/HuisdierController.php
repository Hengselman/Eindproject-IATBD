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

    public function create(){
        return view('collectie.create');
    }

    public function store(Request $request, \App\Models\Huisdier $huisdier){
        $huisdier->name = $request->input('name');
        $huisdier->soort = $request->input('soort');
        $huisdier->description = $request->input('description');

        /* Validate Image */
        $this->validate($request, [
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,webp|max:2048',
        ]);

        $huisdier->image = $request->file('image')->store('image', 'public');

        /*$data = Image::create([
            'image' => $image_path,
        ]); */

        session()->flash('success', 'Image Upload successfully');

        /*$huisdier->image = $request->input('image');*/

        try{
            $huisdier->save();
            return redirect('/');
        }
        catch(Exception $e){
            return redirect('/collectie/create');
        }
    }
}
