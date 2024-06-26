<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculo';

    protected $fillable = [
        'marca',
        'modelo',
        'anio',
        'precio',
        'color',
        'numero_puertas',
        'capacidad_pasajero',
        'garantia',
    ];
}
