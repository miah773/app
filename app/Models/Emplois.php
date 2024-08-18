<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emplois extends Model
{
    use HasFactory;
     // Nom de la table associé à ce modèle
     protected $table = 'emplois';

     // Les attributs qui sont mass assignable
     protected $fillable = [
         'id_etud',
         'jour',
         'heure_debut',
         'heure_fin',
         'id_cours',
         'id_matière',
         'id_classe',
         'id_enseignant'
     ];
 
     // Relations

     public function Classe()
     {
         return $this->belongsTo(Classe::class, 'id_classe');
     }
 
     public function Etudiant()
     {
         return $this->belongsTo(Etudiant::class, 'id_etud');
     }
 
     public function Cours()
     {
         return $this->belongsTo(Cours::class, 'id_cours');
     }
 
     public function Matiere()
     {
         return $this->belongsTo(Matiere::class, 'id_matière');
     }
     public function Enseignant()
     {
         return $this->belongsTo(Enseignant::class, 'id_enseignant');
     }
}
