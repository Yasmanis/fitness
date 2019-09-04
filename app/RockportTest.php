<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RockportTest extends Model
{
    protected $fillable = [
        'user_id', 'fc', 'distancia', 'tiempo'
    ];
}
