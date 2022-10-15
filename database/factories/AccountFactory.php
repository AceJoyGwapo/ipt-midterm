<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\accounts;
use Faker\Generator as Faker;

$factory->define(accounts::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 20),
        'acc_name' => $faker->name,
        'init_invest' => rand(1000, 10000),
        'start_date' => $faker->date($format = 'y-m-d', $max = 'now'),
        'remarks' => $faker->sentence($nbWords = 6, $variableNbWords = true)
    ];
});