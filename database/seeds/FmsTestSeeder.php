<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class FmsTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {        
        $observaciones = array("I","M","R","B","MB","E");
        for ($j=0; $j < 10; $j++) { 

            for ($i=0; $i < 12; $i++) { 
                DB::table('f_m_s_tests')->insert([
                    [
                        'user_id' => $j + 1,
                        'date' => '2018-' . (string) ($i + 1) . '-' . (string) ($i + 2),
                        'sentadillasPF' => random_int(0, 20), 
                        'sentadillasObservaciones' => $observaciones[random_int(0,5)], 
                        'paso_vallaPF' => random_int(0, 20), 
                        'paso_vallaObservaciones' => $observaciones[random_int(0,5)], 
                        'estocada_lineaPF' => random_int(0, 20), 
                        'estocada_lineaObservaciones' => $observaciones[random_int(0,5)], 
                        'movilidad_hombrosPF' => random_int(0, 20), 
                        'movilidad_hombrosObservaciones' => $observaciones[random_int(0,5)], 
                        'elev_activa_pierna_rectaPF' => random_int(0, 20), 
                        'elev_activa_pierna_rectaObservaciones' => $observaciones[random_int(0,5)], 
                        'estab_tronco_en_flexionPF' => random_int(0, 20), 
                        'estab_tronco_en_flexionObservaciones' => $observaciones[random_int(0,5)], 
                        'estab_tronco_en_rotacionPF' => random_int(0, 20), 
                        'estab_tronco_en_rotacionObservaciones' => $observaciones[random_int(0,5)], 
                        'total' => random_int(0, 20), 
                    ],
                ]);
            }
        }
    }
}
