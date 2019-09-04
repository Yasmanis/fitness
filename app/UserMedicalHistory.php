<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMedicalHistory extends Model
{
    protected $fillable = [
        'user_id', 'historia_médica_id'
    ];
}
