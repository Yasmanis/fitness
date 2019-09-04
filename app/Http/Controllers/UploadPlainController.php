<?php

namespace App\Http\Controllers;

use App\PlanEntrenamiento;
use Illuminate\Http\Request;

class UploadPlainController extends Controller
{
    public function training_plan()
    {
        return view('dashboard.training_plan');
    }
    public function training_plan_post(Request $request)
    {
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'muscle' => 'required|string',
            'description' => 'required|string',
            'dosification' => 'required|string'
        ]);

        $plan_entrenamiento = new PlanEntrenamiento();
        $plan_entrenamiento->muscle = $request->muscle;
        $plan_entrenamiento->description = $request->description;
        $plan_entrenamiento->dosification = $request->dosification;
        $plan_entrenamiento->image = request()->file('image')->store('public');
        $plan_entrenamiento->save();

        return back()
            ->with('success', 'Has subido los datos existosamente.')
            ->with('plan_entrenamiento', $plan_entrenamiento);
    }

    public function training_plan_template()
    {
        $plan_entrenamiento = PlanEntrenamiento::all();
        // dd($plan_entrenamiento);
        //dd($plan_entrenamiento);

        return view('dashboard.plantilla', compact('plan_entrenamiento'));
    }
}
