<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;
    public $timestamps = false;

    // Nom de la table associée au modèle
    protected $table = 'formation';

    // Les champs pouvant être remplis massivement
    protected $fillable = ['nom', 'acronyme', 'description'];
}
