<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filiere;
use App\Models\Classe;
use Illuminate\Support\Facades\DB;
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
    public function deleteClasse($id)
    {
        $classe = Classe::find($id);
    
        if ($classe) {
            $classe->delete();
            return redirect()->route('classe.liste')->with('message', 'Département a été bien supprimé');
        } else {
            return redirect()->route('classe.liste')->with('error', 'Département non trouvé');
        }
    }
    
    
        public function updateClasse(Request $request){
            $request->validate([
                'nom' => 'required|string|max:255',
               
                
            ]);
            $classe = Classe::find($request->id);
            if (!$classe) {
                return redirect()->route('classe.liste')->with('error', 'classe introuvable');
            }
            $classe->nom  = $request->input('nom');
            
            
           
            $classe->save();
            return redirect()->route('classe.liste')->with('message', 'classe a ete bien modifié');
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
