<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aanmelding;
use App\Models\Huisdier;
use App\Models\User;
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
        $huisdier_id = $request->input('huisdier_id');
        $eigenaar_id = $request->input('eigenaar_id');

        $aanmelding = new Aanmelding();
        $aanmelding->user_id = $user_id;
        $aanmelding->huisdier_id = $huisdier_id;
        $aanmelding->eigenaar_id = $eigenaar_id;

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
        $diertje = Aanmelding::where('huisdier_id', $aanmelding->huisdier_id);
        $huisdier = $aanmelding->huisdier;
        $huisdier->zoekt_oppas = 0;
        $huisdier->save();
        $diertje->delete();
        return redirect()->route('collectie.index');
    }

    public function destroy($id)
    {
        $aanmelding = Aanmelding::findOrFail($id);
        $aanmelding->delete();
        return redirect()->route('collectie.index');
    }

    public function index()
    {
        $aanmeldingen = Aanmelding::all();
        return view('aanmeldingen.index', ['aanmeldingen' => $aanmeldingen]);
    }
}
