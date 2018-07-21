<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class owner extends Model
{
    //
    public function mobile(){
        return $this->hasMany(Mobile::class);
    }
}
