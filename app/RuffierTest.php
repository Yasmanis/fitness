<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RuffierTest extends Model
{
    protected $fillable = [
        'user_id', 'resultados', 'fcreposo', 'fcmaxima', 'fcreserva'
    ];
}
