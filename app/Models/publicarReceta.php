<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class publicarReceta extends Model
{
    use HasFactory;
    protected $table = 'recetas'; // Nombre de la tabla en la base de datos

    protected $fillable = [
        'nombre',
        'descripcion',
        'ingredientes',
        'unidad',
        'pasos',
        'foto',
        'nivel',
        'tiempo_estimado',
    ];

}
