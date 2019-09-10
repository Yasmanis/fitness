<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\FitnessActive;
use App\FitnessObjective;
use App\Condition;
use App\FunctionalTraining;
use App\DietNutrition;
use App\HealthCondition;
use App\User;
use App\UserFicha;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('dashboard.home');
    } 

    public function fitness_evaluation()
    {
        $fitness_actives = FitnessActive::all();
        $fitness_objectives = FitnessObjective::all();
        $conditions = Condition::all();
        $functional_training = FunctionalTraining::all();
        $diet_nutrition = DietNutrition::all();
        $health_conditions = HealthCondition::all();

        return view('dashboard.fitness_evaluation',compact('fitness_actives','fitness_objectives','conditions','functional_training','diet_nutrition','health_conditions'));
    }

    public function user_card()
    {
        return view('dashboard.user_card');
    }

    public function user_diagnosis()
    {
        return view('dashboard.user_diagnosis');
    }

    public function user_tanita()
    {
        return view('dashboard.user_tanita');
    }

    public function user_tanita_parameters()
    {
        $user_fichas = UserFicha::all();
        return view('dashboard.user_tanita_parameters',compact('user_fichas'));
    }

    public function list_users()
    {
        $users = UserFicha::all();
        return view('datatables.list_user',compact('users'));
    }

    public function delete_user($id)
    {
        $user = UserFicha::find($id);
        $user->delete();
        return redirect()->route('list-users');
    }
}
