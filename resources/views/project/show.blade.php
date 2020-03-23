@extends('layout')

@section('content')
    <ul> PROJECTS
        <li>
            {{$project->title}}

            {{$project->description}}
        </li>
    </ul>
    <a href="/projects/{{$project->id}}/edit"> Edit Project</a>
    @if($project->tasks->count())
    TASKS
    <ul>
        @foreach($project->tasks as $task)
            <form method="POST" action="/tasks/{{$task->id}}">
                @method('patch')
                @csrf
                <label class="checkbox {{$task->completed ? 'is-complete' : ''}}" for="completed">
                    <input type="checkbox" name="completed" onchange="this.form.submit()"
                    {{$task->completed ? 'checked' : ''}}>
                    {{$task->description}}
                </label>
            </form>
        @endforeach
    </ul>
    @endif

{{--  Add a new Task Form  --}}

    <form action="/projects/{{$project->id}}/tasks" method="post">
        @csrf
        <label for="task">New Task</label>
        <div class="form-control">
            <input for="description" name="description">
            <button class="btn">ADD TASK</button>
        </div>
    </form>

    @include('errors')
@endsection


