<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'tipo_pedido', 'descripcion', 
                          'fecha_entrega', 'fecha_recoleccion', 
                          'cantidad_articulos', 'costo'];
}
