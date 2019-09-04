<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFicha extends Model
{
    protected $fillable = [
        'name', 'edad', 'phone', 'email', 'id_perfil_tanita', 'peso', 'estatura', 'perfil', 'lesiones', 'habitos', 'objetivos', 'genero', 'day_of_birth'
    ];
}
