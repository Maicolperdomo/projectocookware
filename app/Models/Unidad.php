<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        // ... otros campos ...
    ];

    // Relación inversa, pertenece a un ingrediente
    public function ingrediente()
    {
        return $this->belongsTo(Ingredientes::class);
    }
}


