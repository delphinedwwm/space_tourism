<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = 
    [
        'image',
        'titre_fr',
        'destination_fr',
        'distance_fr',
        'duree_fr',
        'titre_en',
        'destination_en',
        'distance_en',
        'duree_en'
    ];
}
