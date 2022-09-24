<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preinscription extends Model
{
    use HasFactory;
    protected $fillable = [
        'premon',
        'nom',
        'photo',
        'acte_naissance',
        'diplome',
        'filiere',
        'contact'
    ];
}
