<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserMedicalHistory;

class UserMedicalHistoryController extends Controller
{
    public function store(Request $request)
    {
        UserMedicalHistory::create([
            'user_id' => $request->user_id,
            'historia_médica_id' => collect($request->historia_médica_id)->values()->implode(',')
        ]);
        return back();
    }
}
