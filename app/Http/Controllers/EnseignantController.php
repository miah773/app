<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;
use App\Models\Specialite;
use App\Models\Departement;
use Illuminate\Support\Facades\DB;

class EnseignantController extends Controller
{
    public function create()
    {
        $specialites = Specialite::all();
        $departements = Departement::all();

        return view("admin.Enseignant.enseignant-create", [
            'specialites' => $specialites,
            'departements' => $departements,
        ]);
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
            'id_departement' => 'required|integer|exists:departement,id',
        ]);

        $enseignant = new Enseignant();
        $enseignant->nom = $request->input('nom');
        $enseignant->prenom = $request->input('prenom');
        $enseignant->email = $request->input('email');
        $enseignant->poste = $request->input('poste');
        $enseignant->id_specialite = $request->input('id_specialite');
        $enseignant->tel = $request->input('tel');
        $enseignant->CIN = $request->input('CIN');
        $enseignant->date_rec = $request->input('date_rec');
        $enseignant->id_departement = $request->input('id_departement');
        $enseignant->save();

        return redirect()->route('enseignant.create')->with('success', 'Enseignant créé avec succès');
    }
    public function getEnseignant()
    {
        $enseignants = DB::table('enseignant')
            ->join('specialite', 'enseignant.id_specialite', '=', 'specialite.id')
            ->join('departement', 'enseignant.id_departement', '=', 'departement.id')
            ->select('enseignant.id', 'enseignant.nom as enseignant_nom', 'enseignant.prenom as enseignant_prenom',
                'enseignant.email as enseignant_email', 'enseignant.poste as enseignant_poste',
                'specialite.nom as specialite_nom', 'enseignant.tel as enseignant_tel',
                'enseignant.CIN as enseignant_CIN', 'enseignant.date_rec as enseignant_date_rec',
                'departement.nom as departement_nom')
            ->get();
    
        $specialites = DB::table('specialite')->get();
        $departements = DB::table('departement')->get();
    
        return view('admin.Enseignant.listeEnseignant', [
            'data' => $enseignants,
            'specialites' => $specialites,
            'departements' => $departements
        ]);
    }
    

    public function deleteEnseignant($id)
    {
        $enseignant = Enseignant::find($id);
        $enseignant->delete();

        return redirect()->route('listeenseignant')->with('message', 'Enseignant a été supprimé avec succès');
    }

    public function updateEnseignant(Request $request, $id)
{
    // Valide les données du formulaire
    $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'poste' => 'required|string|max:255',
        'id_specialite' => 'required|integer|exists:specialite,id',
        'tel' => 'required|string|max:20',
        'CIN' => 'required|string|max:20',
        'date_rec' => 'required|date',
        'id_departement' => 'required|integer|exists:departement,id',
    ]);

    // Trouve l'enseignant à modifier
    $enseignant = Enseignant::findOrFail($id);

    // Met à jour les informations de l'enseignant
    $enseignant->nom = $request->input('nom');
    $enseignant->prenom = $request->input('prenom');
    $enseignant->email = $request->input('email');
    $enseignant->poste = $request->input('poste');
    $enseignant->id_specialite = $request->input('id_specialite');
    $enseignant->tel = $request->input('tel');
    $enseignant->CIN = $request->input('CIN');
    $enseignant->date_rec = $request->input('date_rec');
    $enseignant->id_departement = $request->input('id_departement');
    $enseignant->save();

    // Redirige vers la liste des enseignants avec un message de succès
    return redirect()->route('listeenseignant')->with('message', 'Enseignant a été modifié avec succès');
}

public function show($id)
{
    $enseignant = DB::table('enseignant')
        ->join('specialite', 'enseignant.id_specialite', '=', 'specialite.id')
        ->join('departement', 'enseignant.id_departement', '=', 'departement.id')
        ->select('enseignant.*', 'enseignant.id as enseignant_id', 'enseignant.nom as enseignant_nom',
            'enseignant.prenom as enseignant_prenom', 'enseignant.email as enseignant_email',
            'enseignant.poste as enseignant_poste', 'specialite.nom as specialite_nom',
            'enseignant.tel as enseignant_tel', 'enseignant.CIN as enseignant_CIN',
            'enseignant.date_rec as enseignant_date_rec', 'departement.nom as departement_nom')
        ->where('enseignant.id', $id)
        ->first();

    $specialites = Specialite::all(); // Utilisez le modèle pour obtenir les spécialités
    $departements = Departement::all(); // Utilisez le modèle pour obtenir les départements

    $data = [
        'enseignant' => $enseignant,
        'specialites' => $specialites,
        'departements' => $departements
    ];

    return response()->json($data);
}

}
