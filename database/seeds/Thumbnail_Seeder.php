<?php

use App\Thumbnail;
use Illuminate\Database\Seeder;

class Thumbnail_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //给50个文章,每个创建一个缩略图
        for ($i = 1; $i <= 50; $i++) {
            Thumbnail::create(['name' => 'placeholder.jpg', 'article_id' => $i]);
        }
    }
}
