<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserFitnessEvaluation;
use App\Http\Requests\UserFitnessEvaluationRequest;

class Fitness_Evaluation extends Controller
{
    public function store(UserFitnessEvaluationRequest $request)
    {
        UserFitnessEvaluation::create([
            'user_id' => $request->user_id,
            'fitness_active_id' => $request->fitness_active_id,
            'fitness_objetive_id' => $request->fitness_objetive_id,
            'condition_id' => collect($request->condition_id)->values()->implode(','),
            'diet_nutrition_id' => collect($request->diet_nutrition_id)->values()->implode(','),
            'functional_training_id' => collect($request->functional_training_id)->values()->implode(','),
            'health_conditions_id' => collect($request->health_conditions_id)->values()->implode(','),
        ]);

        return back();
    }
}
