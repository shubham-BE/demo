<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
//    protected $table = 'projects';

    protected $fillable =['title','description'];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTasks($description)
    {
        $task = new Task();
        $task->description=$description;
        $task->project_id=$this->id;
        $task->save();

//        $this->tasks()->create(compact('description'));  // save project_id automatically

        return back();


    }
}
