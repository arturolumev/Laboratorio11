<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Cancion extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'titulo',
        'duracion',
        'reproducciones',
    ];
}
