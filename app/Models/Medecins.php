<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelpermedecins
 */
class Medecins extends Model
{
    protected $fillable = [
        'matricle',
        'nom',
        'prenom',
        'age',
        'sexe',
        'adresse',
        'telephone',
        'email'
    ];
}
