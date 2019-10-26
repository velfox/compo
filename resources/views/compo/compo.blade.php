@extends('compo.layout')

@section('content')
    <h1> Upcoming compo's </h1>

    @foreach ($compo as $compo)
      <h1> <span class="badge badge-light"> <span class="badge badge-secondary">{{ $compo->name }} </span> <span class="badge badge-secondary">{{$compo->date }}</span> <a href="/compo/{{ $compo->id }}/edit" class="badge badge-info">Edit</a> </span> <h1> 
    @endforeach

@endsection

