<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;
     // Nom de la table associé à ce modèle
     protected $table = 'matiere';

     // Les attributs qui sont mass assignable
     protected $fillable = [
         'nom_mat',
         'code_mat',
         'description_mat',
         
         'semestre',
         'nom_enseignant'
     ];
 
     // Relations
     public function Etudiant()
     {
         return $this->belongsToMany(Etudiant::class, 'etudiant_matiere', 'id_matiere', 'id_etud');
     }
 
     public function Emplois()
     {
         return $this->hasMany(Emplois::class, 'id_matiere');
     }
}
