<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Album extends Eloquent
{
    use HasFactory;
    protected $fillable = [
        'foto',
        'titulo',
        'year',
    ];
}
