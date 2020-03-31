<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'discription' => $faker->paragraph(3),
        'complited' => $faker->boolean()
    ];
});
