<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loguin extends Model
{
   // use HasFactory;
   protected $fillable =[
    'id',
    'nickname',
    'password'
];
protected $hidden = [
    'created_at',
    'update_at'
];
}
