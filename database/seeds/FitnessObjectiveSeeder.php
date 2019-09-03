<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FitnessObjectiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fitness_objectives')->insert([
            ['option' => 'Perder peso'],
            ['option' => 'Fortalecer el torso'],
            ['option' => 'Objetivo tren superior'],
            ['option' => 'Objetivo tren inferior'],
            ['option' => 'Desarrollar músculo'],
            ['option' => 'Tonificar músculo'],
            ['option' => 'Mejorar resistencia'],
            ['option' => 'Mejorar flexibilidad'],
        ]);
    }
}
