<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //protected $table = 
    protected $fillable = ['name'];

    public function posts()
    {
        return $this->belongsToMany(Post::class,'post_tag','post_id','tag_id');
    }
}
