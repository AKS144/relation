<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];//mass assignment errror

    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
