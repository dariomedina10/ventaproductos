<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'descripcion',
        'precio_neto',
        'porc_impuesto',
        'valor_impuesto',
        'precio_final'

    ];
}
