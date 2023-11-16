<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cantidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        // ... otros campos ...
    ];

    // Relación inversa, pertenece a un ingrediente
    public function ingrediente()
    {
        return $this->belongsTo(Ingredientes::class);
    }
}



