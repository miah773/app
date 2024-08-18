<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

use App\Models\Classe;
use DB;

class EtudiantController extends Controller
{
    //
    public function create(){
        $classes = Classe::all();
        return view("admin.Etudiant.etudiant-create", ['data' => $classes]);
    }
    

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'Num_inscription' => 'required|string|max:9',
            'Nom_etud' => 'required|string|max:255',
            'Prenom_etud' => 'required|string|max:255',
            'Age_etud' => 'required|string|max:2',
            'Redoublant' => 'required|boolean',
            'Email' => 'required|string|email|max:255',
            'Num_tel' => 'required|string|max:8',
        ]);
    
        // Create a new Etudiant instance
        $etudiant = new Etudiant();
        $etudiant->Num_inscription = $request->input('Num_inscription');
        $etudiant->Nom_etud = $request->input('Nom_etud');
        $etudiant->Prenom_etud = $request->input('Prenom_etud');
        $etudiant->Age_etud = $request->input('Age_etud');
        $etudiant->Redoublant = (bool) $request->input('Redoublant');
        $etudiant->Email = $request->input('Email');
        $etudiant->Num_tel = $request->input('Num_tel');
        $etudiant->id_classe = $request->input('id_classe');
    
        // Save the Etudiant instance to the database
        $etudiant->save();
    
        // Redirect to the student list with a success message
        return redirect()->route('etudiant.create')->with('success', 'Étudiant créé avec succès');
    }
    


public function getEtudiant(){
    $etudiant = DB::table('etudiant')
    ->join('classe', 'etudiant.id_classe', '=', 'classe.id')
    ->select('etudiant.id','etudiant.Num_inscription as num_inscrip', 'etudiant.Nom_etud as etudiant_nom','etudiant.Prenom_etud as etudiant_prenom',
    'etudiant.Age_etud as etudiant_age', 'classe.nom as classe_nom','etudiant.Redoublant	 as Redoublant	','etudiant.Email	 as Email	','etudiant.Num_tel	 as Num_tel')
    ->get();    
    
   

  return view('admin/Etudiant/listeEtudiant',['data'=>$etudiant]);
}

public function show($id)
{
    $etudiant = DB::table('etudiant')
    ->join('classe', 'etudiant.id_classe', '=', 'classe.id')
    ->where('etudiant.id', $id)
    ->get();


    $data = [
        'etudiant' => $etudiant,
    ];

    // Renvoie la réponse JSON avec les deux jeux de données
    return response()->json($data);
    
}
public function deleteEtudiant($id){
    $etudiant = Etudiant::find($id);
    $etudiant->delete();
     return redirect()->route('listeetudiant')->with('message', 'Etudiant a ete bien supprimé');
}

public function updateEtudiant(Request $request){
    $etudiant = Etudiant::find($request->id);
    $etudiant->Nom_etud  = $request->Nom_etud;
    $etudiant->save();
    return redirect()->route('listeetudiant')->with('message', 'Etudiant a ete bien modifié');
}




}