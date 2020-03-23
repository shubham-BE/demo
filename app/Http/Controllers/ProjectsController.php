<?php

namespace App\Http\Controllers;

use App\Project;
use App\Services\Twitter;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
//        return $projects;
//        return view('project.index',['projects' => $projects]);
        return view('project.index',compact('projects'));
//        return view('project.index');

    }

    public function create()
    {
//        dd("CREATE");
        return view('project.create');
    }

    public function store()
    {
//        return request()->all();

//        $project = new Project();
//        $project->title = request('title');
//        $project->description = request('desc');
//        $project->save();

        // NOT WORKING
//        Project::create([
//            'title' => request('title'),
//            'description' => request('desc'),
//        ]);

// Project::create(request(['title','desc']));
        request()->validate([
            'title' => ['required','min:3'],
            'desc' => 'required',
        ]);
        $project = new Project();
        $project->title = request('title');
        $project->description = request('desc');
        $project->save();



        return redirect('/projects');
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('project.edit',compact('project'));
//        return $id;
    }

    public function update(Project $project)
    {
//        dd("UPDATE");
//       return request()->all();

//        $project = Project::find($id);
//        $project->title = request('title');
//        $project->description = request('desc');
//        $project->save();

        $project->update(request(['title','desc']));


        return redirect('/projects');
    }

    public function destroy($id)
    {
//        dd("DESTROY METHOD");
        Project::find($id)->delete();
        return redirect('/projects');
    }

//    public function show($id)
//    {
//        $project = Project::findOrFail($id);
//        return view('project.show',compact('project'));
//    }

//    public function show(Project $project)           // Route Model Binding.
//    {
//        return view('project.show',compact('project'));
//    }

    public function show(){
       $twitter = app('twitter');
       dd($twitter);
    }

}
