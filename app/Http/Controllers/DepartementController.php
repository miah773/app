<?php

namespace App\Http\Controllers;
use App\Models\Enseignant;
use App\Models\Departement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DepartementController extends Controller
{
    //
    
    public function create(){
        $enseignant = Enseignant::all();
        return view("admin.Departement.departement-create", ['data' => $enseignant]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
        ]);

        $departement = new Departement();
        $departement->nom = $request->input('nom');
        $departement->acronyme = $request->input('acronyme');
        $departement->description = $request->input('description');
        $departement->chef_departement = $request->input('chef_departement');
        $departement->code = $request->input('code');
        $departement->tel = $request->input('tel');
        $departement->id_enseignant = $request->input('id_enseignant');
        $departement->save();

        return redirect()->route('listedepartement')->with('success', 'département créée avec succès');
    }



    public function getDepartement(){
        $departement = DB::table('departement')
        ->join('enseignant', 'departement.id_enseignant', '=', 'enseignant.id')
        ->select('departement.id', 'departement.nom as departement_nom', 'departement.acronyme as departement_acronyme', 'departement.description as departement_description', 'departement.chef_departement as departement_chef_departement', 'departement.code as departement_code','departement.tel as departement_tel', 'enseignant.id as enseignant_id')
        ->get();    
        return view('admin/Departement/listeDepartement',['data'=>$departement]);
    }


    public function deleteDepartement($id){
        $departement = Departement::find($id);
        $departement->delete();
         return redirect()->route('listedepartemen')->with('message', 'département a ete bien supprimé');
    }

    public function updateDepartement(Request $request){
        $departement = Departement::find($request->id);
        $enseignant=Enseignant::find($request->id);
        $departement->nom  = $request->nom;
        $departement->acronyme  = $request->acronyme;
        $departement->description  = $request->description;
        $departement->chef_departement  = $request->chef_departement;
        $departement->code  = $request->code;
        $departement->tel  = $request->tel;
        $departement->id_enseignant=$enseignant;

        $departement->save();
        return redirect()->route('listedepartement')->with('message', 'département a ete bien modifié');
    }

    
public function show($id)
{
    $departement = DB::table('departement')
    ->join('enseignant', 'departement.id_enseignant', '=', 'enseignant.id')
    ->select('departement.*','departement.id', 'departement.nom as departement_nom', 'departement.acronyme as departement_acronyme', 'departement.description as departement_description', 'departement.chef_departement as departement_chef_departement', 'departement.code as departement_code','departement.tel as departement_tel', 'enseignant.id as enseignant_id')
    ->where('departement.id', $id)
    ->get();
    $enseignant = DB::table('enseignant')->get();
   

    $data = [ 'departement' => $departement, 'enseignant' => $enseignant ]; 

    // Renvoie la réponse JSON avec les deux jeux de données
    return response()->json($data);
}


}
