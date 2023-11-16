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
        'pasos',
        'foto',
        'nivel_id',
        'tiempo_estimado',
    ];

    // Relación One-to-Many con Ingredientes
    public function ingredientes()
    {
        return $this->hasMany(Ingredientes::class);
    }

    // Relación One-to-Many con Cantidades
    public function cantidades()
    {
        return $this->hasMany(Cantidad::class);
    }

    // Relación One-to-Many con Unidades
    public function unidades()
    {
        return $this->hasMany(Unidad::class);
    }
}
