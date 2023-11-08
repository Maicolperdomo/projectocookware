<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unidadModel extends Model
{
    use HasFactory;

    public static function obtenerUnidadesPredeterminados()
    {
        return [
            'Gramo (gr)' => 'Gramo (gr)',
            'Libra (lb)' => 'Libra (lb)',
            'Kilogramo (kg)' => 'Kilogramo (kg)',
            'Mililitro (ml)' => 'Mililitro (ml)',
            'Litro (l)' => 'Litro (l)',
            'Onza (oz)' => 'Onza (oz)',
            'Cucharada sopera (c/s)' => 'Cucharada sopera (c/s)',
            'Cucharada (c/c)' => 'Cucharada (c/c)',
            'Taza (tz)' => 'Taza (tz)',
            'Centimetro cubico (cm3)' => 'Centimetro cubico (cm3)',
        ];
    }
}
