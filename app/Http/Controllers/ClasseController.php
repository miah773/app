<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;
use App\Models\Classe;
use DB;
class ClasseController extends Controller
{
    //
    public function create(){
        $filiere = Filiere::all();
        return view("admin.Classe.classe-create", ['data' => $filiere]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $classe = new Classe();
        $classe->nom = $request->input('nom');
        $classe->id_filiere	= $request->input('id_filiere');

        $classe->save();

        return redirect()->route('classe.create')->with('success', 'Classe créée avec succès');
    }

    public function getClasse(){
        $classe = DB::table('classe')
        ->join('filiere', 'classe.id_filiere', '=', 'filiere.id')
        ->select('classe.id', 'classe.nom as classe_nom', 'filiere.nom as filiere_nom')
        ->get();    
        
       

      return view('admin/Classe/listeClasse',['data'=>$classe]);
    }


    public function show($id)
{
     $classe = DB::table('classe')
    ->join('filiere', 'classe.id_filiere', '=', 'filiere.id')
    ->where('classe.id', $id)
    ->get();


    $data = [
        'classe' => $classe,
    ];

    // Renvoie la réponse JSON avec les deux jeux de données
    return response()->json($data);
}
}
