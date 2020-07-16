<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    //
    protected $table = "rooms";
    public function classroom()
    {
        # code...
        return $this->belongsTo('App\classroom');
    }
    public function customer()
    {
        # code...
        return $this->belongsTo('App\customer');
    }
}
