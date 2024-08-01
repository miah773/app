<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;
    public $timestamps = false;

    // Nom de la table associée au modèle
    protected $table = 'enseignant';

    // Les champs pouvant être remplis massivement
    protected $fillable = ['nom', 'prenom', 'email', 'poste', 'id_specialite', 'tel', 'CIN', 'date_rec','id_departement'];
    
    
}
