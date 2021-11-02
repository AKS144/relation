<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    public function users()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
