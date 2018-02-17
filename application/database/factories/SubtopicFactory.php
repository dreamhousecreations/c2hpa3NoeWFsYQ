<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Subtopic::class, function (Faker $faker) {
    return [
        'name' => $faker->catchPhrase,
        'slug' => str_replace(' ', '-', $faker->catchPhrase),
        'description' => $faker->text(100),
    ];
});
