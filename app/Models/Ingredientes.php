<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'receta_id', // La llave foránea
        'cantidad_id',
        'unidad_id',
    ];

    protected $hidden = [
        'updated_at'
    ];

    public function receta()
    {
        return $this->belongsTo(Recetas::class);
    }

    public function cantidad()
    {
        return $this->belongsTo(Cantidad::class);
    }

    public function unidad()
    {
        return $this->belongsTo(Unidad::class);
    }
}



