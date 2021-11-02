<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PostTag extends Pivot

{
    protected $table = 'post_tag';

    public static function boot()
    {
        //lifecycle detection of intermediate table
        parent::boot();
        static::created(function($item){
            dd('created event',$item);
        });
        static::deleted(function($item){
            dd('delete event', $item);
        });
    }
}
