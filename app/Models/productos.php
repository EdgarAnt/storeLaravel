<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Symfony\Component\Console\Helper\Table;

class productos extends Model
{
    use HasFactory;
    use SoftDeletes;
    //just here is what type of data
    //first is the column
    //this a array with all the parameters
    
    // protected $table='productoss'this is in case when we are change the name of the table
    protected $table='tareas';
    protected $fillable = [
    'nombre',
    'descripcion',
    'vendido',
    'caducidad',// here we are work with dates, lararavel have a library for manage calculations in easy way.
    'stock',
    ];

    protected $dates = ['caducidad'];//this is for generated calculations of the dates with any libraries of laravel.

    //protected $timestamps = false; //this is for deshabilatable the timestamps, if you delete that and not write the first, is a error

}
