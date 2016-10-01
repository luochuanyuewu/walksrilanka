<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{

    public $timestamps = false;

    protected $table = 'settings';

    protected $fillable = ['key','value'];

}
