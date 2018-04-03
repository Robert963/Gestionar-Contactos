<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contactos extends Model
{

    protected $primaryKey = 'id_cont';

    protected $fillable = ['pri_nombre', 'pri_apellido', 'email','telefono','sexo','id_tipo','id_pais'];

   
}
