<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function tasks()
    {
        return $this->hasManyThrough(
            Task::class,
            Team::class,
            'project_id',//Foreign key users table
            'user_id',//foreign key in tasks
            'id',//Local key in projects table
            'user_id'//local key in pivot table project_users
        );
    }

    public function task()
    {
        return $this->hasOneThrough(
            Task::class,
            Team::class,
            'project_id',//Foreign key users table
            'user_id',//foreign key in tasks
            'id',//Local key in projects table
            'user_id'//local key in pivot table project_users
        );
    }
}
