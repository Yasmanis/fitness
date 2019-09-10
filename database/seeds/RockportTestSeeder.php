<?php

use Illuminate\Database\Seeder;
/* use Faker\Generator as Faker; */

class RockportTestSeeder extends Seeder
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
                DB::table('rockport_tests')->insert([
                    [
                        'user_id' => $j + 1, 
                        'fc' => random_int(50,100), 
                        'distancia' => random_int(50,200), 
                        'tiempo' => random_int(20,60), 
                    ],
                ]);
            }
        }
    }
}