<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'mall_id'   => str_replace('.', '', $faker->userName),
        'shop_no'   => $faker->randomDigitNotNull,
        'language_code' => $faker->languageCode,
        'country_code'  => $faker->countryCode,
        'shop_name'     => $faker->company,
        'domain'        => $faker->domainName,
        'is_operating'  => 1,
        'updated_at'    => null,
    ];
});
