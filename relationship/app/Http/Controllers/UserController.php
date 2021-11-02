<?php

namespace App\Http\Controllers;

use App\Post;
use App\Role;
use App\User;
use App\Phone;
use Illuminate\Support\Str;
use Illuminate\Http\Request;



class UserController extends Controller
{

    public function index()
    {
        //hasOne
        /*$user = User::first();
        $phone = Phone::first();
        $phone->user_id = $user->id;
        $phone->save();
        dd($user->phoneX);//if only phoneX is passed it will return all Phone model data for User
        */

        /*//reverse for Phone model
        $phone = Phone::where('number', '1234567890')->first();
        if($phone){
            dd($phone->owner);
        }*/

        //to get data from user table
        //$user = User::first();//first is her for first input id


        /*//for fake data post table
        $post = new Post;
        $post->title = Str::random(10);
        $post->description = Str::random(10);//any random string for fake data
        $post->user_id = 2;//put here 2 or $user_id
        $post->save();*/

        //dd($user->posts);

        /*//one-to-many
        $user = user::find(2);//2 is id in User model find by id
        dd($user->author);*/

        /*//one-to-many reverse
        $post = Post::first();
        dd($post->author);*/
        //end


       /* //many-to-many
        $user = User::first();//for first id only
        $roles = Role::first();

        //$user->roles()->attach($roles->id);//for single id
        //or
        $user->roles()->attach([2,3,4]);//inserting all subject to one id
        //$user->roles()->sync([2,3,4]);//inserting all subject to one id


        //dd($user->roles);
        //or
        //in loop
        //echo $user->name;

        foreach(User::all() as $user){
           // echo '<p>'.$user->name.' '.$user->last_name.'<p>';
            echo '<p>'.$user->name.'<p>';
            if ($user->roles) {
                echo '<ul>';
                foreach ($user->roles as $roles) {
                    echo '<li>'.$roles->name.'</li>';
                }
                echo '</ul>';
            }
        }
*/

    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
