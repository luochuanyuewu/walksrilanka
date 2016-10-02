<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title','content','picture'];

    public $storepath = '/images/articles/';

    public function  getPictureAttribute($avatar)
    {
        return $this->storepath . $avatar;
    }

    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }
}
