<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $table = 'roles';
    
    protected $fillable = [
        'name', 
    ];
    public function students()
    {
        //many-to-many
        //return $this->belongsToMany(User::class,'user_roles');
    }
}
