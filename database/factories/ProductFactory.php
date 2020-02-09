<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(3),
        'description' => $faker->sentence(8),
        'price' => $faker->randomFloat(2, 0, 100),
        'published' => $faker->numberBetween(0, 1),
    ];
});
