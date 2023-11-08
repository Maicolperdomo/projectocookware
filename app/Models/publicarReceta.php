<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicarReceta extends Model
{
    use HasFactory;
    protected $fillable = [
        'tituloReceta',
        'descripcion',
        'ingredientes',
        'pasoPaso',
        'tiempo'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
