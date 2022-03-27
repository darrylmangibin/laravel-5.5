<?php

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
        'customer' => $faker->name,
        'review' => $faker->paragraph,
        'star' => $faker->numberBetween,
        'product_id' => function () {
            return Product::all()->random();
        }
    ];
});
