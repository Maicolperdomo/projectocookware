<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recetas extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nombre',
        'descripcion',
        'ingredientes',
        'cantidad_id',
        'unidad_id',
        'pasos',
        'foto',
        'likes',
        'nivel_id',
        'tiempo_estimado',
    ];

    protected $hidden =
    [
    'created_at',
    'updated_ap'
    ];

    public function nivel()
{
    return $this->belongsTo(Niveles::class, 'nivel_id');
}
// Recetas.php

public function likes()
{
    return $this->hasMany(Like::class);
}


}
