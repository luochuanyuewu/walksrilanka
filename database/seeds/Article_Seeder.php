<?php

use App\Article;
use App\Category;
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

        //给5个分类分别创建10个文章
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 10; $j++) {
                Article::create(['title'=>'Title_Cate_' . $i,'content'=>'Content_Cate_' . $i,'category_id'=>$i]);
            }
        }
    }
}
