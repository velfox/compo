@extends('compo.layout')

@section('content')
    <h1> <span class="badge badge-info"> Edit compo <span class="badge badge-primary">{{ $compo->name }} </span> <span class="badge badge-secondary">{{$compo->date }}</span> </span>   </h1>
    @if ($errors->any())
    <div class="alert alert-warning" role="alert">
        @foreach ($errors->all() as $error)
            <li> {{ $error }} </li>
        @endforeach
    </div>
@endif
<form action="/compo/{{$compo->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PATCH') }}

        <div class="form-group">
            <label for="">Game Name</label>
            <input type="name" name="name" class="form-control" value="{{$compo->name }}" placeholder="Game name">
            <small class="form-text text-muted">Naam van het spel.</small>
        </div>
        <div class="form-group">
            <label for="">datum</label>
            <input type="date" name="date" class="form-control" value="{{$compo->date }}" placeholder="Min Players">
            <small class="form-text text-muted">Waneer gaat de compatitie van start.</small>
        </div>
        <div class="form-group">
            <label for="">Max Players</label>
            <input type="number" name="maxplayers" class="form-control" value="{{$compo->maxplayers }}" placeholder="Max Players">
            <small class="form-text text-muted">Hoeveel spelers mogen er maximaal meedoen.</small>
        </div>
        <div class="form-group">
            <label for="">Min Players</label>
            <input type="number" name="minplayers"  class="form-control" value="{{$compo->minplayers }}" placeholder="Min Players">
            <small class="form-text text-muted">Hoeveel spelers mogen er minimaal meedoen.</small>
        </div>
        <div class="form-group">
                <label for="">Tonen </label>
                <input name="show" type="checkbox" checked data-toggle="toggle">
                <small class="form-text text-muted">Bepaal hier of de compo te zien is op de homepage</small>
            </div>


        <button type="submit" class="btn btn-primary">Bijwerken</button>
    </form>

    <form action="/compo/{{$compo->id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger">Verweideren</button>
    </form>
@endsection


