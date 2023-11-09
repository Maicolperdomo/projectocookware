<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actualizarPerfil extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'nickname',
        'email',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
