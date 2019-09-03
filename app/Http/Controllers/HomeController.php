<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FitnessActive;
use App\FitnessObjective;
use App\Condition;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fitness_actives = FitnessActive::all();
        $fitness_objectives = FitnessObjective::all();
        $conditions = Condition::all();

        return view('dashboard.home',compact('fitness_actives','fitness_objectives','conditions'));
    }

    public function user_card()
    {
        return view('dashboard.user_card');
    }

    public function user_diagnosis()
    {
        return view('dashboard.user_diagnosis');
    }

    public function user_tests()
    {
        return view('dashboard.user_test');
    }

    public function user_tanita()
    {
        return view('dashboard.user_tanita'); 
    }
}
