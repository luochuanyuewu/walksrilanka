<?php

use App\Category;
use Illuminate\Database\Seeder;

class Category_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create(['name'=>'Package','display_name'=>'旅游套餐']);
        Category::create(['name'=>'Place','display_name'=>'热门目的地']);
        Category::create(['name'=>'Activity','display_name'=>'有趣的活动']);
        Category::create(['name'=>'Food','display_name'=>'食物与饮食']);
        Category::create(['name'=>'Info','display_name'=>'旅游信息']);

    }
}
