<?php

use App\Task;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
Use App\Projects;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects',function(){
/*
    $project = Projects::create([
        'title' =>'Project A'
    ]);

    $user1 = User::create([
        'name' =>'User 1',
        'email' => 'user3@gmail.com',
        'password' => Hash::make('password'),
        'project_id' => $project->id
    ]);

    $user2 = User::create([
        'name' =>'User 2',
        'email' => 'user4@gmail.com',
        'password' => Hash::make('password'),
        'project_id' => $project->id
    ]);

    $user3 = User::create([
        'name' =>'User 3',
        'email' => 'user5@gmail.com',
        'password' => Hash::make('password'),
        'project_id' => $project->id
    ]);

    $task1 = Task::create([
        'title' => 'Task 1 for project 1 by user 1',
        'user_id' => $user1->id
    ]);

    $task2 = Task::create([
        'title' => 'Task 2 for project 2 by user 2',
        'user_id' => $user2->id
    ]);
    $task3 = Task::create([
        'title' => 'Task 2 for project 2 by user 3',
        'user_id' => $user3->id
    ]);
*/
    $project = Projects::find(1);
    return $project->tasks;//for hasManyThrough
    //dd($project->tasks);
    //return $project->task;//for hasOneThrough

});
