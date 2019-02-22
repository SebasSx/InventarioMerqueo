<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'nombre',
        'referencia',
        'precio',
        'costo',
        'unidades',
        'estado',
    ];
}
