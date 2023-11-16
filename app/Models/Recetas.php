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

    protected $hidden = [
        'updated_at'
    ];

    // Relación con la tabla de ingredientes (uno a muchos)
    public function ingredientes()
    {
        return $this->hasMany(Ingredientes::class);
    }

    // Relación con la tabla de cantidades (uno a muchos)
    public function cantidades()
    {
        return $this->hasMany(Cantidad::class);
    }

    // Relación con la tabla de unidades (uno a muchos)
    public function unidades()
    {
        return $this->hasMany(Unidad::class);
    }
}
