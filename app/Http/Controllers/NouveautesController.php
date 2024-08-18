<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nouveautes;
use Carbon\Carbon;

class NouveautesController extends Controller
{
    public function create(){
        return view("admin.Nouveautes.Nouveaute-create");
    }

    public function store(Request $request)
    {
        \Log::info('Reached store method'); // You already have this
        
        // Validation
        \Log::info('Validating request...');
        $validatedData = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'image_url' => 'required|url',
        ]);
        \Log::info('Validation successful: ', $validatedData);
    
        // Creating new record
        try {
            \Log::info('Creating new Nouveautes record...');
            $nouveaute = new Nouveautes();
            $nouveaute->titre = $validatedData['titre'];
            $nouveaute->description = $validatedData['description'];
            $nouveaute->dateheure = now();  // Automatically set to current date and time
            $nouveaute->image_url = $validatedData['image_url'];
            $nouveaute->save();
            \Log::info('Record saved successfully.');
    
            return redirect()->route('nouveautes.index')->with('success', 'Nouveauté créée avec succès.');
        } catch (\Exception $e) {
            \Log::error('Error while saving Nouveautes record: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la création.');
        }
    }
    

    public function getNouveautes(){
        $nouveautes = Nouveautes::all();
        dd($nouveautes);
        return view('admin/Nouveautes/listeNouveautes', ['data' => $nouveautes]);
    }
    
    

    public function deleteNouveautes($id){
        $nouveautes = Nouveautes::find($id);
        $nouveautes->delete();
         return redirect()->route('listeNouveautes')->with('message', 'Nouveauté a ete bien supprimé');
    }

    public function updateNouveautes(Request $request){
        $nouveautes = Nouveautes::find($request->id);
        $nouveautes->titre  = $request->titre('titre');
        $nouveautes->description = $request->input('description');
        $nouveautes->dateheure = Carbon::now();
        $nouveautes->image_url = $request->input('image_url');

        $nouveautes->save();
        return redirect()->route('listeNouveautes')->with('message', 'Nouveauté a ete bien modifié');
    }

    
public function show($id)
{
      


    $nouveautes = Nouveautes::find($id);
    $data = [
        'nouveautes' => $nouveautes,
    ];

    // Renvoie la réponse JSON avec les deux jeux de données
    return response()->json($data);
}



}
