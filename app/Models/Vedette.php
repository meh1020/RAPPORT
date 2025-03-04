<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vedette extends Model
{
    use HasFactory;

    protected $table = 'vedette';

    protected $fillable = [
        'unite_sar',
        'total_interventions',
        'total_pob',
        'total_survivants',
        'total_morts',
        'total_disparus',
    ];
}
