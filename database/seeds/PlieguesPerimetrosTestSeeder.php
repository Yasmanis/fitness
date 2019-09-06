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

            for ($i=0; $i < 10; $i++) { 
                DB::table('pliegues_perimetros_tests')->insert([
                    [
                        'user_id' => $j + 1, 
                        'date' => '2018-'.(string)($i+1).'-'.(string)($i+2),
                        'tripcipital' => random_int(0,100), 
                        'plieguesgemelo' => random_int(0,100),
                        'subescapular' => random_int(0,100),
                        'suprailiaco' => random_int(0,100),
                        'abdominal' => random_int(0,100),
                        'brazo' => random_int(0,100),
                        'pecho' => random_int(0,100),
                        'abdomen' => random_int(0,100),
                        'cadera' => random_int(0,100),
                        'muslo' => random_int(0,100),
                        'perimetrogemelo' => random_int(0,100),
                    ],
                ]);
            }
        }
    }
}
