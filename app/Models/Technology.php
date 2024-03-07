<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'image',
        'nom_fr',
        'description_fr',
        'nom_en',
        'description_en'
    ];
}