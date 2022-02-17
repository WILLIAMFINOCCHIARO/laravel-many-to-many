<?php

use App\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++) {

            $newPost = new Post();

            $newPost->title = $faker->sentence(7);
            $newPost->slug = Str::slug($newPost->title, $separator = '-');
            $newPost->content = $faker->realText();
            $newPost->published = rand(0, 1);

            $newPost->save();
        }
    }
}
