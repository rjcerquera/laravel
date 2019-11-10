<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\User;
use App\UserInformation;
use Faker\Generator as Faker;

$factory->define(UserInformation::class, function (Faker $faker) {
    static $user = 1;
    return [
        'nombre' => $faker->name,
        'usuario' => $user++,
        'grado' => $faker->numberBetween(1,11),
        'jornada' => $faker->numberBetween(1,3),
        'sede' => $faker->numberBetween(1,3),
    ];
});
