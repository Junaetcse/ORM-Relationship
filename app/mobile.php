<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mobile extends Model
{
    //
    public function owner(){
       return $this->belongsTo(Owner::class);
    }
}
