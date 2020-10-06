<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Task;

$factory->define(Task::class, function (Faker $faker) {
    return [
      'job' => $faker -> word(),
      'month_salary' => $faker -> randomFloat($nbMaxDecimals = 2, $min = 0, $max = 20000)
    ];
});
