<?php

use Illuminate\Database\Seeder;
/* use Faker\Generator as Faker; */

class PlieguesPerimetrosTestSeeder extends Seeder
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
                DB::table('burpees_tests')->insert([
                    [
                        'user_id' => $j + 1, 
                        'resultado' => random_int(0,10), 
                    ],
                ]);
            }
        }
    }
}
