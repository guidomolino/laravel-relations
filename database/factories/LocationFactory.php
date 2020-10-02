<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Location;

$factory->define(Location::class, function (Faker $faker) {
    return [
      'city' => $faker -> city(),
      'country' => $faker -> country()
    ];
});
