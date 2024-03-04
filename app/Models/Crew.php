<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'image',
        'fonction_fr',
        'nom_fr',
        'description_fr',
        'fonction_en',
        'nom_en',
        'description_en'
    ];
}

