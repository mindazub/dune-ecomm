<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Author::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->lastName,
        'email' => $faker->email,
    ];
});

$factory->define(App\Book::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence,
        'isbn' => $faker->randomNumber($nbDigits = NULL),
        'price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'your_price' => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = NULL),
        'cover'=>$faker->imageUrl($width = 320, $height = 150),
        'author_id'=> factory(App\User::class, 1)->create()->id,
    ];
});
