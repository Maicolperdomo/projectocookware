<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
       'receta_id',
        'likes',
    
    ];
    protected $hidden =
    [
    'created_at',
    'updated_ap'
    ];
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
}
