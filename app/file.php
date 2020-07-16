<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class file extends Model
{
    //
    protected $table = "files";
    public function classroom()
    {
       return $this->hasMany('App\classroom');
    }
}
