<?php

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(App\Models\Perfil::class, function (Faker $faker) {
    return [
        'year_birth' => rand(1975, 1990),
        // creamos el usuario solo si no se perzonaliza, solamente con colocarlo dentro de un closer
        'user_id' => function(){
            return factory(User::class)->create()->id;
        },
    ];
});
