<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    //
    protected $table = "customers";
    public function room()
    {
        return $this->hasMany('App\room');
    }
}
