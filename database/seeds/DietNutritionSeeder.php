<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietNutritionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diet_nutrition')->insert([
            ['name' => 'Healthy Dieting'],
            ['name' => 'Sports Nutrition'],
            ['name' => 'Food & Recipes'],
        ]);
    }
}
