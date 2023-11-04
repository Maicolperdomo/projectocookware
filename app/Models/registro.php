<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
  //  use HasFactory;
  protected $fillable = [
    'nombre',
    'nickname',
    'correo',
    'contrasena',
];
protected $hidden = [
    'contrasena',
    'remember_token',
];
protected $casts = [
    'confirmarcontrasena' => 'datetime',
    'contrasena' => 'hashed',
];
}
