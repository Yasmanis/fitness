<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicalHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medical_histories')->insert([
            ['option' => 'padecimientos'],
            ['option' => 'sintomas'],
            ['option' => 'edad'],
            ['option' => 'riesgo_cardiovascular'],
            ['option' => 'tension_arterial'],
            ['option' => 'fumador'],
            ['option' => 'colesterol'],
            ['option' => 'otros'],
        ]);
    }
}
