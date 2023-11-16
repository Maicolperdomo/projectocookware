<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    protected $hidden = [
        'updated_at'
    ];

    public function cantidades()
    {
        return $this->hasMany(Cantidad::class);
    }

    public function ingredientes()
    {
        return $this->hasMany(Ingredientes::class);
    }
}




