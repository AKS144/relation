<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title', 'description', 'user_id',
    ];

    //1st
    public function author()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    //2nd many-many
    public function tags()
    {
        return $this->belongsToMany(Tag::class)
        ->using(PostTag::class)//create relationship for post_tag table
        ->withTimestamps()
        ->withPivot('status');
    }

}
