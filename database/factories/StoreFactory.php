<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->sentence,
        'phone' => $faker->phoneNumber,
        'mobile_phone' => $faker->mobile_phone,
        'slug' => $faker->slug,
    ];
});
