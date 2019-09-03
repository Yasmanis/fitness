<?php

use Illuminate\Database\Seeder;

class HistoryMedicalDescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('history_medical_descriptions')->insert([
            ['history_medical_id' => 1,'description' => 'Infarto de miocardio y/o angina de pecho'],
            ['history_medical_id' => 1,'description' => 'Cirugía cardiáca'],
            ['history_medical_id' => 1,'description' => 'Cateterismo cardiaco'],
            ['history_medical_id' => 1,'description' => 'Angioplastia coronaria'],
            ['history_medical_id' => 1,'description' => 'Implante de marcapasos o desfribilador cardiaco'],
            ['history_medical_id' => 1,'description' => 'Enfermedad en válvula cardiaca'],
            ['history_medical_id' => 1,'description' => 'Enfermedad cardiaca congénita'],
            ['history_medical_id' => 1,'description' => 'Transplante cardiaco'],
            ['history_medical_id' => 2,'description' => 'Molestias en el pecho con el esfuerzo'],
            ['history_medical_id' => 2,'description' => 'Falta de aire desproporcionada al esfuerzo realizado'],
            ['history_medical_id' => 2,'description' => 'Ha tenido marco, desfallecimiento o pérdida de conciencia'],
            ['history_medical_id' => 2,'description' => 'Toma medicación para el corazón o la tensión arterial'],
            ['history_medical_id' => 3,'description' => 'Persona de 65 años en adelante'],
            ['history_medical_id' => 4,'description' => 'Hombre mayor de 45 años'],
            ['history_medical_id' => 4,'description' => 'Mujer mayor de 55 años'],
            ['history_medical_id' => 4,'description' => 'Histerectomia (extirpación uterina)'],
            ['history_medical_id' => 4,'description' => 'Menopáusica'],
            ['history_medical_id' => 5,'description' => 'Desconocida'],
            ['history_medical_id' => 5,'description' => 'Mayor a 180/35'],
            ['history_medical_id' => 6,'description' => 'Más de x cigarrillos diarios'],
            ['history_medical_id' => 6,'description' => 'Antiguo fumador'],
            ['history_medical_id' => 7,'description' => 'Desconocido'],
            ['history_medical_id' => 7,'description' => 'Por encima de 200 mg/dl'],
            ['history_medical_id' => 7,'description' => 'Algún familiar ha sufrido un ataque cardiaco antes de los 55 años'],
            ['history_medical_id' => 7,'description' => 'Diabético'],
            ['history_medical_id' => 7,'description' => 'Sedentarismo (actividad física < 30min en 3 días en la semana)'],
            ['history_medical_id' => 7,'description' => 'Obesidad'],
            ['history_medical_id' => 8,'description' => 'Problemas en huesos o articulaciones'],
            ['history_medical_id' => 8,'description' => 'Otras enfermedades'],
            ['history_medical_id' => 8,'description' => 'Posible ejercicio físico perjudicial'],
        ]);
    }
}
