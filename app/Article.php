<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title','content','category_id'];


    //返回文章所属分类
    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }

    //返回文章所拥有的缩略图
    public function thumbnail()
    {
        return $this->hasOne('App\Thumbnail','article_id','id');
    }

    //返回文章所拥有的所有图片
    public function pictures()
    {
        return $this->hasMany('App\Picture','article_id','id');
    }

}
