<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formation;
class FormationController extends Controller
{
    //
    public function create(){
        return view("admin.Formation.formation-create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $formation = new Formation();
        $formation->nom = $request->input('nom');
        $formation->acronyme = $request->input('acronyme');
        $formation->description = $request->input('description');
        $formation->save();

        return redirect()->route('listeFormation')->with('success', 'Spécialité créée avec succès');
    }



    public function getFormation(){
        $formation = Formation::all();
        return view('admin/Formation/listeFormation',['data'=>$formation]);
    }


    public function deleteFormation($id){
        $formation = Formation::find($id);
        $formation->delete();
         return redirect()->route('listeFormation')->with('message', 'Spécialité a ete bien supprimé');
    }

    public function updateFormation(Request $request){
        $formation = Formation::find($request->id);
        $formation->nom  = $request->nom;
        $formation->acronyme  = $request->acronyme;
        $formation->description  = $request->description;
        $formation->save();
        return redirect()->route('listeFormation')->with('message', 'Spécialité a ete bien modifié');
    }

    
public function show($id)
{
      /*  $temoignages = DB::table('temoignages')
    ->join('client', 'temoignages.id_client', '=', 'client.id')
    ->join('societe', 'client.id_societe', '=', 'societe.id')
    ->select('temoignages.id', 'client.nom as client_nom', 'client.prenom as client_prenom', 'client.photo as client_photo', 'societe.nom as nom_societe', 
    'temoignages.description', 'temoignages.statut as temoignages_statut')
    ->where('temoignages.id', $id)
    ->get();*/


    $formation = Formation::find($id);
    $data = [
        'formation' => $formation,
    ];

    // Renvoie la réponse JSON avec les deux jeux de données
    return response()->json($data);
}



   


}
