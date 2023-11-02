<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registro extends Model
{
  //  use HasFactory;
  protected $fillable = [
    'name',
    'nickname',
    'email',
    'contrasena',
];
protected $hidden = [
    'password',
    'remember_token',
];
protected $casts = [
    'email_verified_at' => 'datetime',
];
}
