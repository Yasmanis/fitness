<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlieguesPerimetrosTest extends Model
{
    protected $fillable = [
        'user_id', 'tripcipital', 'plieguesgemelo', 'subescapular', 'suprailiaco', 'abdominal', 'brazo', 'pecho', 'abdomen', 'cadera', 'muslo', 'perimetrogemelo'
    ];
}
