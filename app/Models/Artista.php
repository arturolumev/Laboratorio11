<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Artista extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'nomnbre',
        'foto',
        'biografia',
    ];
}
