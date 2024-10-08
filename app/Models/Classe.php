<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    public $timestamps = false;

    // Nom de la table associée au modèle
    protected $table = 'classe';

    // Les champs pouvant être remplis massivement
    protected $fillable = ['nom', 	'id-filiere'	];


    
    public function Emplois()
    {
        return $this->hasMany(Emplois::class, 'id_classe');
    }
}
