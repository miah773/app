<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    //
    
   
    public function create(){
        return view("admin.Departement.departement-create");
    }



    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'acronyme' => 'required|string|max:255',
            'description' => 'required|string|max:500',
            'chef_departement' => 'required|string|max:255',
            'code_tel' => 'required|string|max:255',
        ]);

        $departement = new Departement();
        $departement->nom = $request->input('nom');
        $departement->acronyme = $request->input('acronyme');
        $departement->description = $request->input('description');
        $departement->chef_departement = $request->input('chef_departement');
        $departement->code_tel = $request->input('code_tel');
       
        $departement->save();

        return redirect()->route('departement.create')->with('success', 'département créée avec succès');
    }



    public function getDepartement(){
        $departement = Departement::all();
        return view('admin.Departement.listeDepartement',['data'=>$departement]);
    }


    public function deleteDepartement($id)
{
    $departement = Departement::find($id);

    if ($departement) {
        $departement->delete();
        return redirect()->route('listedepartement')->with('message', 'Département a été bien supprimé');
    } else {
        return redirect()->route('listedepartement')->with('error', 'Département non trouvé');
    }
}


    public function updateDepartement(Request $request){
        $request->validate([
            'nom' => 'required|string|max:255',
            'acronyme' => 'required|string|max:255', // Vérifie la présence de l'acronyme
            'description' => 'required|string|max:500',
            'chef_departement' => 'required|string|max:255',
            'code_tel' => 'required|string|max:255',
        ]);
        $departement = Departement::find($request->id);
        if (!$departement) {
            return redirect()->route('listedepartement')->with('error', 'Département introuvable');
        }
        $departement->nom  = $request->nom;
        $departement->acronyme  = $request->acronyme;
        $departement->description  = $request->description;
        $departement->chef_departement  = $request->chef_departement;
        $departement->code_tel = $request->code_tel;
       
        $departement->save();
        return redirect()->route('listedepartement')->with('message', 'département a ete bien modifié');
    }

    
public function show($id)
{
    $departement = Departement::find($id);
    $data = [
        'departement' => $departement,
    ];

    // Renvoie la réponse JSON avec les deux jeux de données
    return response()->json($data);

}
}

