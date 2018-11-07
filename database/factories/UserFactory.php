<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'age' => rand(20, 40),
        'phone' => $faker->phoneNumber,
        // creamos el usuario solo si no se perzonaliza, solamente con colocarlo dentro de un closer
        'pais_id' => function(){
            return factory(\App\Models\Pais::class)->create()->id;
        },
    ];
});
