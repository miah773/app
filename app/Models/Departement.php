<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    use HasFactory;
    public $timestamps = false;

    // Nom de la table associée au modèle
    protected $table = 'departement';

    // Les champs pouvant être remplis massivement
    protected $fillable = ['nom', 	'acronyme', 'description', 'chef_departement', 'code','tel','id_enseignant'	];
}
