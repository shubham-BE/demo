@extends('layout')

@section('content')
    <h1>HOMEPAGE</h1>
{{--    <h1>HOMEPAGE {{$foo}}</h1>--}}
{{--    <h1>HOMEPAGE {!! $test_data !!}</h1>--}}


    <ul>
        @foreach($tasks as $task)
        <li>  {{$task}}    </li>
        @endforeach
    </ul>



@endsection
