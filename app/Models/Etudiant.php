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
<<<<<<< HEAD
    protected $fillable = [
        'Num_inscription', 'Nom_etud', 'Prenom_etud',  'Age_etud', 'id_classe','Redoublant', 'Email', 'Num_tel',
    ];
    }
=======
    protected $fillable = ['Num_inscription',	'Nom_etud','Prenom_etud	','Age_etud','id_classe','Redoublant','Email','Num_tel'];
}
>>>>>>> main/main
