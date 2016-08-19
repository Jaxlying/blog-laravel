<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i = 1;$i < 50; $i++){
            \App\Article::create([
                'title'=>'这是title'.$i,
                'body'=>'这是body这是body这是body这是body这是body这是body'.$i,
                'user_id'=>'1',
            ]);
        }

    }
}
