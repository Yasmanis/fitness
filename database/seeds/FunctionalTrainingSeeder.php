<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FunctionalTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('functional_trainings')->insert([
            ['name' => 'Plyometrics'],
            ['name' => 'Suspension'],
            ['name' => 'Equilibrio'],
        ]);
    }
}
