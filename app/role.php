<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    //
    public function writers(){
        return $this->belongsToMany(Writer::class);
    }
}
