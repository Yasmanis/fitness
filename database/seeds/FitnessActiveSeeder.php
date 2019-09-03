<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FitnessActiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fitness_actives')->insert([
            ['option' => 'Hago ejercicio regularmente'],
            ['option' => 'Paso por distintas fases'],
            ['option' => 'Considérame un novato'],
        ]);
    }
}
