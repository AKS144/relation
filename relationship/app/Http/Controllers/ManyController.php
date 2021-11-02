<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Post;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class ManyController extends Controller
{

    public function index()
    {
       // $tag = Tag::first();
        $post = Post::find(2);   //$post = Post::find(2); 
         
        //only to add status
    /*    $post->tags()->attach([
            1 => [
                'status' => 'approved'
            ]
        ]);
*/
        //attach
        //$post->tags()->attach($tag); // or  //$post = Post::with('tags')->first();
        //$post->tags()->attach([1,2]);//1,2 is tag ID
        //dd($post->tags);
        //dd($post->tags->first()->pivot->created_at);
       
        //detach
        //$post->tags()->detach([1,2]);//tad id

        //sync
        //$post->tags()->sync([1,2]);//both detach and attach in one
        //dd($post->tags());
       
        
        $posts = Post::with(['author','tags'])->get();//with is a hasmany function in post and tag
        return view('posts.index', compact('posts'));

    }


    public function create()
    {
        
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
