<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Visitor::class, function (Faker $faker) {
    return [
        'ip' => $faker->ipv4,
        'browser' => $faker->randomElement(array('Mozilla', 'Chrome', 'Safari', 'IExplorer'))
    ];
});
