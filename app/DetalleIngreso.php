<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleIngreso extends Model
{
    protected $table = 'detalle_ingreso';

   protected $primaryKey ='iddetalle_ingreso';

   public $timestamps = false ; // agrega dos columas de actualizacion y creacion

   protected $fillable = [

    'idingreso',
    'idarticulo',
    'cantidad',
    'precio_compra',
    'precio_venta'
    
   ];

   protected $guarded =[

   ];
}
