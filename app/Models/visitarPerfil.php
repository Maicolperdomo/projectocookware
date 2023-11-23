<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class visitarPerfil extends Model
{
    use HasFactory;
    protected $fillable = [
        'nickname',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
