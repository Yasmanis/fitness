<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerfilTanitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perfil_tanitas')->insert([
            ['option' => 'Mujer No Deportista'],
            ['option' => 'Mujer Deportista'],
            ['option' => 'Hombre No Deportista'],
            ['option' => 'Hombre Deportista'],
        ]);
    }
}
