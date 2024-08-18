<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
   
    use HasFactory;
    public $timestamps = false;

    // Nom de la table associée au modèle
    protected $table = 'etudiant';

    // Les champs pouvant être remplis massivement
    protected $fillable = ['Num_inscription',	'Nom_etud','Prenom_etud	','Age_etud','id_classe','Redoublant','Email' ,'mdp','Num_tel'];


     // Relations
     public function Cours()
     {
         return $this->hasMany(Cours::class, 'id_etud');
     }
 
     public function Emplois()
     {
         return $this->hasOne(Emplois::class, 'id_etud');
     }
 
     public function Matiere()
     {
         return $this->belongsToMany(Matiere::class, 'etudiant_matiere', 'id_etud', 'id_matiere');
     }
}
