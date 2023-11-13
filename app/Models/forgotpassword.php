<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class forgotpassword extends Model
{
    use HasFactory;
    public $fillable = [
        'email',
        'password'
    ];
    
        protected $hidden = [
            'password',
            'remember_token',
        ];
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];
    
}
