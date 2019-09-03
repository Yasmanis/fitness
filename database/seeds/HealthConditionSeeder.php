<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HealthConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('health_conditions')->insert([
            ['name' => 'Massage Therapy'],
            ['name' => 'Physician'],
            ['name' => 'Back Pain'],
            ['name' => 'Arthritis'],
            ['name' => 'Diabetes'],
            ['name' => 'Injury Rehab'],
            ['name' => 'Physical Therapy'],
            ['name' => 'Hypertension'],
        ]);
    }
}
