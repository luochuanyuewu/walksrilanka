<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = 'pictures';
    protected $fillable = ['name','article_id'];

    //联系人头像的存储路径
    public $store_path = '/images/articles/';

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
