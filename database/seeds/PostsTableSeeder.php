<?php

use Illuminate\Database\Seeder;
use LaravelExpress\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();

        factory('LaravelExpress\Post', 15)->create();
    }
}
