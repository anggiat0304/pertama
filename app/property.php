<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    //
    protected $table = "properties";
    public function classroom()
    {
        # code...
    return $this->belongsToMany('App\classroom');  
    }
}
