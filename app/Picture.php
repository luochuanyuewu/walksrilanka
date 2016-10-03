<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $table = 'pictures';
    protected $fillable = ['name','article_id'];


    public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
