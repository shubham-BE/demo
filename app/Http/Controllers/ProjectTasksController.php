<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;
use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function update(Task $task){
//        dd($task);

//        $task->update([
//            'completed' => request()->has('completed')
//        ]);

//        $task->complete(request()->has('completed'));

        request()->has('completed') ? $task->complete() : $task->incomplete();
        return back();
}

    public function store(Project $project){
//    dd("STORE TASKS");
//        $task = new Task();
//        $task->description=request('description');
//        $task->project_id=$project->id;
//        $task->save();
        request()->validate(['description'=>'required']);
        $project->addTasks(request('description'));
        return back();
//        return request()->all();
    }
}
