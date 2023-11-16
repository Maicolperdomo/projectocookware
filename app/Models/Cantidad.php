<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cantidad extends Model
{
    use HasFactory;

    protected $fillable = [
        'numero',
        'unidad_id',
    ];

    protected $hidden = [
        'updated_at'
    ];

    public function ingredientes()
    {
        return $this->hasMany(Ingredientes::class);
    }

    public function unidad()
    {
        return $this->belongsTo(Unidad::class);
    }
}




