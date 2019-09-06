<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            UserFichasSeeder::class,
            HistoryMedicalDescriptionSeeder::class,
            MedicalHistorySeeder::class,
            ConditionSeeder::class,
            DietNutritionSeeder::class,
            FitnessActiveSeeder::class,
            FitnessObjectiveSeeder::class,
            FunctionalTrainingSeeder::class,
            HealthConditionSeeder::class,
            PerfilTanitaSeeder::class,
            PlieguesPerimetrosTestSeeder::class
        ]);
    }
}
