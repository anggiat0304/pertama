<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classroom extends Model
{
    //
        protected $table = "classrooms";
       
        public function room()
        {
            # code...
            return $this->hasMany('App\room');
        }
        public function property()
        {
            # code...
            return $this->belongsToMany('App\property');
        }
        
}
