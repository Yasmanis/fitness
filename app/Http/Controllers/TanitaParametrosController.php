<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserTanitaParametros;
use App\UserFicha;

class TanitaParametrosController extends Controller
{
    public function store(Request $request)
    {
        UserTanitaParametros::create($request->all());
        return back()->with('info','Parámetros salvados');
    }
}
