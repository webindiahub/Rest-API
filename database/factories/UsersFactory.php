<?php

$factory->define(App\Models\Users::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'email' => $faker->email,
        'gender' => $faker->randomElement(['male', 'female']),
        'bio' => $faker->text()
    ];
});