<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actualizarPerfil extends Model
{
    use HasFactory;


    public $fillable = [

    'name',
    'lastname',
    'nickname',
    'foto',
    'email',

];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
