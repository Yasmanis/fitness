<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserTanitaParametros extends Model
{
    protected $fillable = [
        'user_id' ,'fecha' ,'peso' ,'bmi' ,'peso_graso_general' ,'hidratacion' ,'peso_muscular' ,'complexion_fisica' ,'peso_oseo' ,'gasto_caloritico' ,'edad_metabolica' ,'grasa_visceral' ,'fuerza_mano_derecha' ,'fuerza_mano_izquierda' ,'observaciones'
    ];
}
