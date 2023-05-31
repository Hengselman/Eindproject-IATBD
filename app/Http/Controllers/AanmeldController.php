<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aanmelding;
use App\Models\Huisdier;
use Illuminate\Support\Facades\Auth;

class AanmeldController extends Controller
{
    public function create()
    {
        return view('aanmeldingen.create');
    }
    
    public function store(Request $request)
    {
        $user_id = Auth::user()->id;
        $huisdier_id = Huisdier::find($request->input('huisdier_id'));

        $aanmelding = new Aanmelding();
        $aanmelding->user()->associate($user_id);
        $aanmelding->huisdier()->associate($huisdier_id);

        $alAangemeld = Aanmelding::where('user_id', $user_id)->where('huisdier_id', $huisdier_id)->first();

        if ($alAangemeld == $aanmelding) {     
            return back()->withErrors('Je hebt je hiervoor al aangemeld.');
        }

        $aanmelding->save();

        return redirect()->route('collectie.index');
    }

    public function accept($id)
    {
        $aanmelding = Aanmelding::findOrFail($id);
        Aanmelding::where('huisdier_id', $aanmelding->huisdier_id)->delete();
    }

    public function refuse($id)
    {
        $aanmelding = Aanmelding::findOrFail($id);
        $aanmelding->delete();
    }

    public function index()
    {
        $aanmeldingen = Aanmelding::all();
        return view('aanmeldingen.index', ['aanmeldingen' => $aanmeldingen]);
    }
}
