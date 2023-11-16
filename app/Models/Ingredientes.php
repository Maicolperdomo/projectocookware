<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    // Relación Many-to-One con Recetas
    public function receta()
    {
        return $this->belongsTo(Recetas::class);
    }

    // Relación One-to-One con Cantidades
    public function cantidad()
    {
        return $this->hasOne(Cantidad::class);
    }

    // Relación One-to-One con Unidades
    public function unidad()
    {
        return $this->hasOne(Unidad::class);
    }
}

