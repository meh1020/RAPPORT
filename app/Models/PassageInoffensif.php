<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassageInoffensif extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_entree',
        'date_sortie',
        'navire',
    ];
}
