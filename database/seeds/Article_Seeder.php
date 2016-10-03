<?php

use App\Article;
use Illuminate\Database\Seeder;

class Article_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //地方
        Article::create(['title'=>'TestArticle','content'=>'TestContentTestContent','category_id'=>2,'picture_id'=>1]);
    }
}
