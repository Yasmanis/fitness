<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conditions')->insert([
            ['name' => 'Strengthen & Tone'],
            ['name' => 'Campo de entrenamiento'],
            ['name' => 'Weight Loss'],
            ['name' => 'Aerobics'],
            ['name' => 'Tabata'],
            ['name' => 'HIIT/Interval'],
            ['name' => 'Peso Corporal'],
            ['name' => 'Stay Fit Lifestyle'],
        ]);
    }
}
