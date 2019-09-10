<?php

use Illuminate\Database\Seeder;
/* use Faker\Generator as Faker; */

class RuffierTestSeeder extends Seeder
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
                DB::table('ruffier_tests')->insert([
                    [
                        'user_id' => $j + 1,
                        'date' => '2018-' . (string) ($i + 1) . '-' . (string) ($i + 2),
                        'resultados' => random_int(0, 10),
                        'fcreposo' => random_int(10, 20),
                        'fcmaxima' => random_int(20, 30),
                        'fcreserva' => random_int(25, 30),
                    ],
                ]);
            }
        }
    }
}