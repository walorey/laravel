<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    // el modelo sabe a que tabla hacer referencia por que toma el nombre del modelo, lo pone en minusculas y plural
    //sino podriamos asignarlo de esta manera: protected $table = 'my_table';
}
