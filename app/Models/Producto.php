<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    
    // protected $table = 'tubo';

    protected $fillable = [
        'id','codigo','nombre_pro','descripcion_pro','imagen_pro'
    ];


    public $timestamps = false;

}
