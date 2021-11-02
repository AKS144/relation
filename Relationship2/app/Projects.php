<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{

    protected $guarded = [];

    protected function users()
    {
        return $this->hasMany(User::class,'project_id','id');
    }

    public function tasks()
    {
        return $this->hasManyThrough(Task::class, User::class, 'project_id', 'user_id', 'id', 'id');
    }

    public function task()
    {
        return $this->hasOneThrough(Task::class, User::class, 'project_id', 'user_id', 'id', 'id');
    }
}
