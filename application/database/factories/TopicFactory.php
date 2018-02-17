<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Topic::class, function (Faker $faker) {
    return [
        'name' => $faker->catchPhrase,
        'slug' => str_replace(' ', '-', $faker->catchPhrase),
        'description' => $faker->text(100),
    ];
});
