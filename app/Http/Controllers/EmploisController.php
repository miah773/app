<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmploisController extends Controller
{
    //
      // Afficher les emplois du temps
      public function index()
      {
          $emplois = Emplois::with('classe')->get(); // Inclure la relation 'classe'
          return view('emplois.index', compact('emplois'));
      }
  
      // Afficher un emploi du temps spécifique
      public function show($id)
      {
          $emplois = Emplois::with('classe')->findOrFail($id); // Inclure la relation 'classe'
          return view('emplois.show', compact('emplois'));
      }
  
      // Enregistrer un nouvel emploi du temps
      public function store(Request $request)
      {
          $request->validate([
              'id_etud' => 'required|exists:etudiant,id',
              'jour' => 'required|date_format:Y-m-d',
              'heure_debut' => 'required|date_format:H:i',
              'heure_fin' => 'required|date_format:H:i',
              'id_cours' => 'required|exists:cours,id',
              'id_matière' => 'required|exists:matiere,id',
              'id_classe' => 'required|exists:classe,id',
              'nom_enseignant' => 'required|string|max:255',
          ]);
  
          Emplois::create($request->all());
  
          return redirect()->route('emplois.index')->with('success', 'Emploi created successfully.');
      }
  
      // Mettre à jour un emploi du temps existant
      public function update(Request $request, $id)
      {
          $request->validate([
              'id_etud' => 'required|exists:etudiant,id',
              'jour' => 'required|date_format:Y-m-d',
              'heure_debut' => 'required|date_format:H:i',
              'heure_fin' => 'required|date_format:H:i',
              'id_cours' => 'required|exists:cours,id',
              'id_matière' => 'required|exists:matiere,id',
              'id_classe' => 'required|exists:classe,id',
              'nom_enseignant' => 'required|string|max:255',
          ]);
  
          $emplois = Emplois::findOrFail($id);
          $emplois->update($request->all());
  
          return redirect()->route('emplois.index')->with('success', 'Emploi updated successfully.');
      }
  }

