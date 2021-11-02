<?php

use App\Task;
use App\User;
use App\Project;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/through',function(){
    $project1 = Project::create([
        'project' =>'Project A'
    ]);
    $project2 = Project::create([
        'project' =>'Project B'
    ]);
    $project3 = Project::create([
        'project' =>'Project C'
    ]);

    $user1 = User::create([
        'name' =>'User 1',
        'email' => 'user1@gmail.com',
        'password' => Hash::make('password'),
        'project_id' => $project1->id
    ]);
    $user2 = User::create([
        'name' =>'User 2',
        'email' => 'user2@gmail.com',
        'password' => Hash::make('password'),
        'project_id' => $project2->id
    ]);
    $user3 = User::create([
        'name' =>'User 3',
        'email' => 'user3@gmail.com',
        'password' => Hash::make('password'),
        'project_id' => $project3->id
    ]);

    $task1 = Task::create([
        'task' => 'Task 1 for project 1 by user 1',
        'user_id' => $user1->id
    ]);

    $task2 = Task::create([
        'task' => 'Task 2 for project 2 by user 2',
        'user_id' => $user2->id
    ]);
    $task3 = Task::create([
        'task' => 'Task 2 for project 2 by user 3',
        'user_id' => $user3->id
    ]);

    $project1->users()->attach($user1);
    $project1->users()->attach($user2);

    $project2->users()->attach($user2);
    $project2->users()->attach($user1);

    $project3->users()->attach($user3);
    $project3->users()->attach($user2);

});

Route::get('/projects',function(){
    /*$user = Project::find(1);
    return $project1->users;*/

   /* $user = User::find(3);
    return $user->projects;
    */

  /*  //find after pivot table for hasmanythrough
    $project= Project::find(3);
    return $project->tasks;*/

    //find after pivot table for hasonethrough
    $project= Project::find(2);
    return $project->task;


});
