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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
// $factory->define(App\User::class, function (Faker\Generator $faker) {
//     static $password;
//
//     return [
//         'name' => $faker->name,
//         'email' => $faker->unique()->safeEmail,
//         'password' => $password ?: $password = bcrypt('secret'),
//         'remember_token' => str_random(10),
//     ];
// });
//
// $factory->define(App\Post::class, function (Faker\Generator $faker) {
//     return [
//         'titel' => $faker->text(30),
//         'nummerplaat' => $faker->text(9),
//         'beschrijving' => $faker->text(200),
//         'thumbnail' => $faker->imageUrl(640, 480)
//     ];
// });
//
// $factory->define(App\PostLike::class, function (Faker\Generator $faker) {
//     $post_id = $faker->numberBetween(1,100);
//     $post = App\Post::where('id', $post_id)->first();
//     $likes = ($post->likes + 1);
//     $post->update(['likes'=>$likes]);
//
//     return [
//         'user_id' => $faker->numberBetween(1,100),
//         'post_id' => $post_id
//     ];
// });
