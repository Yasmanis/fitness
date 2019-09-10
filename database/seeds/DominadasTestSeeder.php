<?php

use Illuminate\Database\Seeder;
/* use Faker\Generator as Faker; */

class DominadasTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($j=0; $j < 10; $j++) { 

            for ($i=0; $i < 12; $i++) { 
                DB::table('dominada_suspension_isometrica_tests')->insert([
                    [
                        'user_id' => $j + 1, 
                        'tiempo' => random_int(10,60), 
                        'cantidad' => random_int(0,10), 
                    ],
                ]);
            }
        }
    }
}
