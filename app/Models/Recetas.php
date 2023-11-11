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
        'cantidad',
        'unidad_id',
        'pasos',
        'foto',
        'nivel_id',
        'tiempo_estimado',
        'created_at',
    ];

    protected $hidden = [
        'updated_at'
    ];
}
