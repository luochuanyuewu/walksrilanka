<?php

use App\SiteSetting;
use Illuminate\Database\Seeder;
class Setting_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        SiteSetting::create(['key'=>'Site.Description','value'=>'准备体验生活中最大的乐趣 ？ 好奇，奇迹 ，名胜古迹，美丽的风景，顽皮的海浪，不同的气候，天气 品尝的特色等等。在这里你什么都能看到。欢迎大家随时光临斯里兰卡。我们希望给你们带来美好的生活体验。']);
        SiteSetting::create(['key'=>'Site.Keywords','value'=>'sanbusililanka, 旅游, 斯里兰卡, 散步, 旅行社, 美丽的地方, travel sri lanka, 锡兰, 旅游/斯里兰卡, 宾馆, 风景']);
    }
}
