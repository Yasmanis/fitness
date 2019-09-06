<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserFicha;
use Faker\Generator as Faker;

$factory->define(UserFicha::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'edad' => random_int(20,40),
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'id_perfil_tanita' => random_int(1,4),
        'peso' => random_int(120,240),
        'estatura' => random_int(140,190),
        'perfil' => $faker->word,
        'lesiones' => $faker->word,
        'habitos' => $faker->word,
        'objetivos' => $faker->word,
        'genero' => 'M',
        'day_of_birth' =>  $faker->date(),
    ];
});
