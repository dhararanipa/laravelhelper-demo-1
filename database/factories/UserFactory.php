<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('secret'), // secret
        'remember_token' => str_random(10),
        'mobile_no' => $faker->phoneNumber,
        'address' => $faker->address,
        'joining_date' => $faker->dateTimeBetween('-2 years', '-1 years')->format('Y-m-d'),
        'dob' => $faker->dateTimeBetween('-30 years', '-15 years')->format('Y-m-d'), // :D
        'base_salary' => $faker->randomNumber(5),
    ];
});