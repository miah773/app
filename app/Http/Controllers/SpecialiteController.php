<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialite;

class SpecialiteController extends Controller
{
    public function create(){
        return view("admin.Specialite.specialite-create");
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $specialite = new Specialite();
        $specialite->nom = $request->input('nom');

        $specialite->save();

        return redirect()->route('listespecialite')->with('success', 'Spécialité créée avec succès');
    }



    public function getSpecialite(){
        $specialite = Specialite::all();
        return view('admin/Specialite/listeSpecialites',['data'=>$specialite]);
    }


    public function deleteSpecialite($id){
        $specialite = Specialite::find($id);
        $specialite->delete();
         return redirect()->route('listespecialite')->with('message', 'Spécialité a ete bien supprimé');
    }

    public function updateSpecialite(Request $request){
        $specialite = Specialite::find($request->id);
        $specialite->nom  = $request->nom;
        $specialite->save();
        return redirect()->route('listespecialite')->with('message', 'Spécialité a ete bien modifié');
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


    $specialite = Specialite::find($id);
    $data = [
        'specialite' => $specialite,
    ];

    // Renvoie la réponse JSON avec les deux jeux de données
    return response()->json($data);
}



}