<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tagfamily extends Model
{
    public function tags(){
        return $this->hasMany('App\Tag');
    }
}
