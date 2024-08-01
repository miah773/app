<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;

class EnseignantController extends Controller
{
    //
    public function create(){
        return view("admin.Enseignant.enseignant-create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $equipe = new Enseignant();
        $equipe->nom = $request->input('nom');

        $equipe->save();

        return redirect()->route('equipe.create')->with('success', 'Équipe créée avec succès');
    }

}
