<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(App\Models\auth\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$ZwGRn793jmScCZ8c9s3mR.6YIfCcVGghmAf3PGgf5xiZR5lvTYIey',
        'remember_token' => Str::random(10),
        'role' => 'user',
        'active' => true,
    ];
});

$factory->afterCreating(App\Models\auth\User::class, function ($user, $faker) {
    $user->profile()->save(factory(App\Models\auth\UserProfile::class)->make());
});

$factory->state(App\Models\auth\User::class, 'inactive', function ($faker) {
    return [
        'active' => false,
    ];
});
