<?php

use Illuminate\Database\Seeder;
/* use Faker\Generator as Faker; */

class SaltoVerticalTestSeeder extends Seeder
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
                DB::table('salto_vertical_tests')->insert([
                    [
                        'user_id' => $j + 1,
                        'date' => '2018-' . (string) ($i + 1) . '-' . (string) ($i + 2),
                        'resultados' => random_int(0, 10),
                        'notas' => random_int(0, 5),
                    ],
                ]);
            }
        }
    }
}