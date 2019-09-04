<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserFitnessEvaluation extends Model
{
    protected $fillable = [
        'user_id', 'fitness_active_id', 'fitness_objetive_id', 'condition_id', 'diet_nutrition_id', 'functional_training_id', 'health_conditions_id'
    ];
}
