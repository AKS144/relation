<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //one to one relationship
    public function user()
    {
        return $this->hasOne(Phone::class,'user_id','id');//foreign key is user_id of Phone and id is for User model
    }

    //one-to-many
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    //many-to-many
    public function roles()
    {
        return $this->belongsToMany(Role::class,'user_roles');//pivot table name, foreign key and id
    }
}
