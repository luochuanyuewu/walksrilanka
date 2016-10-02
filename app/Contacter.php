<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacter extends Model
{
    protected $table = 'contacters';

    protected $fillable = ['name','avatar','phone','wechat_id'];

//    联系人头像的存储路径
    public $storepath = '/images/contacters/';

    public function  getAvatarAttribute($avatar)
    {
        return $this->storepath . $avatar;
    }
}
