<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $title = $faker->sentence(4);
    return [
        'user_id'=>rand(1,30),
        'category_id'=>rand(1,20),
        'name'=> $title,
        'Slug'=> str_slug($title),
        'excerpt'=>$faker->text(100),
        'body'=> $faker->text(500),
        'status'=>$faker->randomElement(['draft', 'published']),
        'image'=>$faker->imageUrl($width =1200, $height = 600)
    ];
});
