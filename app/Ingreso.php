<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingreso extends Model
{
    protected $table = 'ingreso';

   protected $primaryKey ='idingreso';

   public $timestamps = false ; // agrega dos columas de actualizacion y creacion

   protected $fillable = [


   ];

   protected $guarded =[

   ];
}
