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
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Link::class, function (Faker\Generator $faker) {
    return [
        'url' => $faker->url,
        'title' => substr($faker->sentence, 0, -1),
        'author' => $faker->name,
        'created' => $faker->dateTimeThisMonth,
        'description' => $faker->sentences(3, true),
        'content' => implode(PHP_EOL, $faker->paragraphs(10)),
    ];
});
