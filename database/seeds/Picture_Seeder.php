<?php

use App\Picture;
use Illuminate\Database\Seeder;

class Picture_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //给50个文章每个创建4个图片
        for ($i = 1; $i <= 50; $i++) {
            for ($j = 1; $j <= 4; $j++) {
                Picture::create(['name' => 'placeholder.jpg', 'article_id' => $i]);
            }
        }

    }
}
