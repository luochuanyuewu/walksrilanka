<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    protected $fillable = ['title','content','category_id','picture_id'];

    public $storepath = '/images/articles/';


    public function category()
    {
        return $this->belongsTo('App\Category','category_id','id');
    }

    public function picture()
    {
        return $this->hasOne('App\Picture');
    }

}
