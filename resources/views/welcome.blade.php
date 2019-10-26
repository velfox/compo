@extends('layout')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h1> hallow     {{ $test }} </h1>

    @foreach ($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
    
@endsection