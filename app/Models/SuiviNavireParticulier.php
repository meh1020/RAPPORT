<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuiviNavireParticulier extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'nom_navire',
        'mmsi',
        'observations',
    ];
}
