<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// data dummy
use App\Models\Account\Experience;
use Faker\Generator as Faker;

$factory->define(Experience::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    	'email' => $faker->unique()->safeEmail,
    	'confirmed' => true
    ];
});
