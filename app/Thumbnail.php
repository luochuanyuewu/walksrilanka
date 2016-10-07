<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    protected $table = 'thumbnails';
    protected $fillable = ['name','article_id'];

    //缩略图的存储路径
    public $store_path = '/images/thumbnails/';

    public function  getNameAttribute($name)
    {
        return $this->store_path . $name;
    }


    //返回该图片所属的文章
    public function article()
    {
        return $this->belongsTo('App\Article','article_id','id');
    }
}
