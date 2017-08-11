<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks') );
    }

//    public function show(){
//        $task = Task::find($id);
//        return view('tasks.show', compact('task') );
//    }

    // this is the Route Model Binding version of show() ^^
    public function show(Task $task){ // Task::find(id)
        return view('tasks.show', compact('task') );
    }

}
