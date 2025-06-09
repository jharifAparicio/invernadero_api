<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parametros extends Model
{
    /** @use HasFactory<\Database\Factories\ParametrosFactory> */
    use HasFactory;
    protected $fillable = [
        'tipo',
        'valor_minimo',
        'valor_maximo',
        'unidad',
    ];
}
