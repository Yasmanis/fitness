<?php

use Illuminate\Database\Seeder;
/* use Faker\Generator as Faker; */

class FmsTestSeeder extends Seeder
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
                DB::table('f_m_s_tests')->insert([
                    [
                        'user_id' => $j + 1, 
                        'total' => random_int(0,100), 
                        'observaciones' => random_int(0,10), 
                    ],
                ]);
            }
        }
    }
}
