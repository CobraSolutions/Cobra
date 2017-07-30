<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use App\PostLike;
use factories\ModelFactory;


class DatabaseSeeder extends Seeder
{

    //php artisan migrate:refresh --seed <--------------------------------------
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name'=>'Kenan','email'=>'kenan.ekici@outlook.com', 'password'=>bcrypt('kenan1997')]);
        //voeg hier je eigen account in

        factory(User::class, 100)->create()->each(function($u) {
          $u->posts()->save(factory(Post::class)->make());
        });

        //factory(PostLike::class,1000)->create();

    }
}
