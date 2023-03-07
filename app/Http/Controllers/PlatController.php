<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Plat;

class PlatController extends Controller
{
    //ajoutes
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required',
            'ingredients' => 'required',
            'instructions' => 'required',
            'temps_cuisson' => 'required|numeric',
            'niveau_difficulte' => 'required',
            'cout' => 'required|numeric',
            'nombre_portions' => 'required|numeric',
        ]);

        Plat::create($validatedData);

        return redirect('/plats');
    }
}

