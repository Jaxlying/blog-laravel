<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 0; $i < 10; $i++) {
            \App\Comment::create([
                'email' => 'test',
                'name' => 'test',
                'body' => 'test',
                'article_id' => 2,
            ]);
        }
    }
}
