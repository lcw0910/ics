<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name'           => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'password'       => bcrypt('secret'),
        'remember_token' => Str::random(10),
        'is_admin'       => 0,
        'role'           => 'operator',
        'updated_at'     => null
    ];
});

$factory->state(User::class, 'admin', function () {
    return [
        'is_admin' => 1
    ];
});

// Make operator
$factory->state(User::class, 'operator', function () {
    return [
        'role' => 'operator'
    ];
});

// Make developer
$factory->state(User::class, 'developer', function () {
    return [
        'role' => 'developer'
    ];
});

// Make manager
$factory->state(User::class, 'manager', function () {
    return [
        'role' => 'manager'
    ];
});

// Make planner
$factory->state(User::class, 'planner', function () {
    return [
        'role' => 'planner'
    ];
});