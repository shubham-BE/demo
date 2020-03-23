@extends('layout')

@section('content')
    <h1>Edit Project</h1>

    {{$project}}

    <form method="POST" action="/projects/{{$project->id}}">
        {{method_field('PATCH')}}
        {{csrf_field()}}
        <div>
            <input name="title" type="text" placeholder="title" value="{{$project->title}}">
        </div>
        <div>
            <textarea name="desc" placeholder="description">{{$project->description}}</textarea>
        </div>
        <div>
            <button type="submit">UPDATE</button>
        </div>
    </form>

    <form method="POST" action="/projects/{{$project->id}}">
{{--        {{method_field('DELETE')}}--}}
{{--        {{csrf_field()}}--}}
        @method('delete')
        @csrf
        <div>
            <button type="submit">DELETE</button>
        </div>
    </form>

@endsection
