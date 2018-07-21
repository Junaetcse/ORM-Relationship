<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    //
    public function posts(){
        return $this->hasManyThrough(Post::class,Blogger::class,'blog_id','blogger_id');
    }
}
