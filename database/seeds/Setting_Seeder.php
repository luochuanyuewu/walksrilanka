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
        SiteSetting::create(['key'=>'Site.Description','value'=>'你拥有无比的好奇心,想要体验生活中最大的乐趣吗?那么欢迎大家来到斯
        里兰卡。在这里,名胜古迹,美丽的风景,激流壮阔的海浪,舒适的的气候和天气,特色的美食等等应有尽有。在这里你什么都能看到。。而我们,则希望给你们带来最美好的生活体验。']);
        SiteSetting::create(['key'=>'Site.Keywords','value'=>'sanbusililanka, 旅游, 斯里兰卡, 散步, 旅行社, 美丽的地方, travel sri lanka, 锡兰, 旅游斯里兰卡,散步斯里兰卡, 宾馆, 风景']);

//        Setting::set('Site.Description','你拥有无比的好奇心,想要体验生活中最大的乐趣吗?那么欢迎大家来到斯
//        里兰卡。在这里,名胜古迹,美丽的风景,激流壮阔的海浪,舒适的的气候和天气,特色的美食等等应有尽有。在这里你什么都能看到。。而我们,则希望给你们带来最美好的生活体验。');
//        Setting::set('Site.Keywords','sanbusililanka, 旅游, 斯里兰卡, 散步, 旅行社, 美丽的地方, travel sri lanka, 锡兰, 旅游斯里兰卡,散步斯里兰卡, 宾馆, 风景');
    }
}
