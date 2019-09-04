<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DominadaSuspensionIsometricaTest extends Model
{
    protected $fillable = [
        'user_id', 'baremo_dominada', 'baremo_isometrico'
    ];
}
