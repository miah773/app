<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;
use App\Models\Specialite;
use Illuminate\Support\Facades\DB;
class EnseignantController extends Controller
{
    //
    public function create(){
        $specialite=Specialite::all();
        return view("admin.Enseignant.enseignant-create",['data'=>$specialite]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'poste' => 'required|string|max:255',
            'id_specialite' => 'required|integer|exists:specialite,id',
            'tel' => 'required|string|max:20',
            'CIN' => 'required|string|max:20',
            'date_rec' => 'required|date',
        ]);
        $enseignant = new Enseignant();
        $enseignant->nom = $request->input('nom');
        $enseignant->prenom	= $request->input('prenom');
        $enseignant->email	= $request->input('email');
        $enseignant->poste	= $request->input('poste');
        $enseignant->id_specialite	= $request->input('id_specialite');
        $enseignant->tel = $request->input('tel');
        $enseignant->CIN = $request->input('CIN');
        $enseignant->date_rec = $request->input('date_rec');

        $enseignant->save();


        return redirect()->route('enseignant.create')->with('success', 'Enseignant créé avec succès');
    }
    public function getEnseignant(){
        $enseignant = DB::table('enseignant')
        ->join('specialite', 'enseignant.id_specialite', '=', 'specialite.id')
        ->select('enseignant.id', 'enseignant.nom as enseignant_nom', 'enseignant.prenom as enseignant_prenom', 'enseignant.email as enseignant_email', 'enseignant.poste as enseignant_poste', 'specialite.nom as specalite_nom', 'enseignant.CIN as enseignant_CIN', 'enseignant.date_rec as enseignant_date_rec')
        ->get();    
        
       

      return view('admin/Enseignant/listeEnseignant',['data'=>$enseignant]);
    }
    public function deleteEnseignant($id){
        $enseignant = Enseignant::find($id);
        $enseignant->delete();
         return redirect()->route('listeenseignant')->with('message', 'enseignant a ete bien supprimé');
    }

    public function updateEnseignant(Request $request){
        $enseignant = Specialite::find($request->id);
        $enseignant->nom  = $request->nom;
        $enseignant->save();
        return redirect()->route('listeenseignant')->with('message', 'enseignant a ete bien modifié');
    }
    public function show($id)
    {
        $enseignant = DB::table('enseignant')
        ->join('specialite', 'enseignant.id_specialite', '=', 'specialite.id')
        ->select('enseignant.id', 'enseignant.nom as enseignant_nom', 'enseignant.prenom as enseignant_prenom', 'enseignant.email as enseignant_email', 'enseignant.poste as enseignant_poste', 'specialite.nom as specalite_nom', 'enseignant.CIN as enseignant_CIN', 'enseignant.date_rec as enseignant_date_rec')
        
        ->get();    


        $data = [
            'enseignant' => $enseignant,
        ];

        // Renvoie la réponse JSON avec les deux jeux de données
        return response()->json($data);
}


}
