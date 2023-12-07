<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveles extends Model
{
    use HasFactory;

    protected $fillable = [
        'nivel',
    ];

    public function recetas()
{
    return $this->hasMany(Recetas::class, 'nivel_id');
}

}
