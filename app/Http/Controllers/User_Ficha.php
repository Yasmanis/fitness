<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserFicha;

class User_Ficha extends Controller
{
    public function store(Request $request)
    {
        UserFicha::create($request->all());
        return back();
    }
}
