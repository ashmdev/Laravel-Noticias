<?php

use Faker\Generator as Faker;

$factory->define(App\Assessment::class, function (Faker $faker) {
    return [
        'post_id'=>rand(1,20),
        'value'=>rand(1,5),
    ];
});
