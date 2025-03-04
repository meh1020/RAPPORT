<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cabotage extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'provenance',
        'navires',
        'equipage',
        'passagers',
    ];
}
