@extends('layout')

@section('content')
    <h1>Create a New Project</h1>
    <form method="POST" action="/projects">
        {{ csrf_field() }}
        <div class="form-control">
            <div>
                <input value="{{old('title')}}" class="{{$errors->has('title') ? 'bg-danger' : ''}}" name="title" type="text" placeholder="title">
            </div>
            <div>
                <textarea value="{{old('desc')}}" class="{{$errors->has('desc') ? 'bg-danger' : ''}}" name="desc" placeholder="description"></textarea>
            </div>
            <div>
                <button type="submit">submit</button>
            </div>

            @include('errors')
        </div>
    </form>
@endsection
