<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actuador extends Model
{
    /** @use HasFactory<\Database\Factories\ActuadorFactory> */
    use HasFactory;
    protected $fillable = [
        'dispositivo_id',
        'estado',
    ];
}
