<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    // Si le nom de la table n'est pas standard, vous pouvez le préciser
    // protected $table = 'destinations';

    // Définir les attributs autorisés au Mass Assignment
    protected $fillable = [
        'name',
    ];
}
