<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperpatients
 */
class Patients extends Model
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
