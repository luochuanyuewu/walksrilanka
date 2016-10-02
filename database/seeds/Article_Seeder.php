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
        Article::create(['title'=>'地方名字','content'=>'地方描述地方描述地方描述地方描述地方描述地方描述','category_id'=>1,'picture'=>'placetogo.png']);
        Article::create(['title'=>'地方名字','content'=>'地方描述地方描述地方描述地方描述地方描述地方描述','category_id'=>1,'picture'=>'placetogo.png']);
        Article::create(['title'=>'地方名字','content'=>'地方描述地方描述地方描述地方描述地方描述地方描述','category_id'=>1,'picture'=>'placetogo.png']);
        Article::create(['title'=>'地方名字','content'=>'地方描述地方描述地方描述地方描述地方描述地方描述','category_id'=>1,'picture'=>'placetogo.png']);
        Article::create(['title'=>'地方名字','content'=>'地方描述地方描述地方描述地方描述地方描述地方描述','category_id'=>1,'picture'=>'placetogo.png']);

        //事情
        Article::create(['title'=>'活动名字','content'=>'活动内容活动内容活动内容活动内容活动内容活动内容','category_id'=>2,'picture'=>'placetogo.png']);
        Article::create(['title'=>'活动名字','content'=>'活动内容活动内容活动内容活动内容活动内容活动内容','category_id'=>2,'picture'=>'placetogo.png']);
        Article::create(['title'=>'活动名字','content'=>'活动内容活动内容活动内容活动内容活动内容活动内容','category_id'=>2,'picture'=>'placetogo.png']);
        Article::create(['title'=>'活动名字','content'=>'活动内容活动内容活动内容活动内容活动内容活动内容','category_id'=>2,'picture'=>'placetogo.png']);
        Article::create(['title'=>'活动名字','content'=>'活动内容活动内容活动内容活动内容活动内容活动内容','category_id'=>2,'picture'=>'placetogo.png']);

        Article::create(['title'=>'旅游信息','content'=>'旅游信息描述旅游信息描述旅游信息描述旅游信息描述','category_id'=>3,'picture'=>'placetogo.png']);
        Article::create(['title'=>'旅游信息','content'=>'旅游信息描述旅游信息描述旅游信息描述旅游信息描述','category_id'=>3,'picture'=>'placetogo.png']);
        Article::create(['title'=>'旅游信息','content'=>'旅游信息描述旅游信息描述旅游信息描述旅游信息描述','category_id'=>3,'picture'=>'placetogo.png']);
        Article::create(['title'=>'旅游信息','content'=>'旅游信息描述旅游信息描述旅游信息描述旅游信息描述','category_id'=>3,'picture'=>'placetogo.png']);
        Article::create(['title'=>'旅游信息','content'=>'旅游信息描述旅游信息描述旅游信息描述旅游信息描述','category_id'=>3,'picture'=>'placetogo.png']);

        Article::create(['title'=>'饮食名字','content'=>'饮食介绍饮食介绍饮食介绍饮食介绍饮食介绍饮食介绍','category_id'=>4,'picture'=>'placetogo.png']);
        Article::create(['title'=>'饮食名字','content'=>'饮食介绍饮食介绍饮食介绍饮食介绍饮食介绍饮食介绍','category_id'=>4,'picture'=>'placetogo.png']);
        Article::create(['title'=>'饮食名字','content'=>'饮食介绍饮食介绍饮食介绍饮食介绍饮食介绍饮食介绍','category_id'=>4,'picture'=>'placetogo.png']);
        Article::create(['title'=>'饮食名字','content'=>'饮食介绍饮食介绍饮食介绍饮食介绍饮食介绍饮食介绍','category_id'=>4,'picture'=>'placetogo.png']);
        Article::create(['title'=>'饮食名字','content'=>'饮食介绍饮食介绍饮食介绍饮食介绍饮食介绍饮食介绍','category_id'=>4,'picture'=>'placetogo.png']);




    }
}
