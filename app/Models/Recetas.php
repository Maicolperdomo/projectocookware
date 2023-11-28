<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recetas extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'ingredientes',
        'cantidad_id',
        'unidad_id',
        'pasos',
        'foto',
        'nivel_id',
        'tiempo_estimado',
    ];

    protected $hidden =
    [
    'created_at',
    'updated_ap'
    ];
}