<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\page;
use Faker\Generator as Faker;

$factory->define(page::class, function (Faker $faker) {
    return [
        'text' => $faker->paragraph(10),
    ];
});
