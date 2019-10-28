@extends('compo.layout')

@section('content')
    <h1> create a new compo </h1>

    @if ($errors->any())
        <div class="alert alert-warning" role="alert">
            @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
            @endforeach
        </div>
    @endif
  <form action="/compo" method="post">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="">Game Name</label>
        <input type="name" name="name" class="form-control {{ $errors->has('name') ? 'is-invalid'  : '' }}" value="{{ old('name')}}" placeholder="Game name">
            <small class="form-text text-muted">Naam van het spel.</small>
        </div>
        <div class="form-group">
                <label for="">Gamemode</label>
                <input type="gamemode" name="gamemode" class="form-control {{ $errors->has('gamemode') ? 'is-invalid'  : '' }}" value="{{ old('gamemode')}}" placeholder="Game name">
                <small class="form-text text-muted">Wat is de gamemode tijdens de competitie.</small>
            </div>
        <div class="form-group">
            <label for="">datum</label>
            <input type="date" name="date" class="form-control {{ $errors->has('date') ? 'is-invalid'  : '' }}" value="{{ old('date')}}" placeholder="Min Players">
            <small class="form-text text-muted">Waneer gaat de compatitie van start.</small>
        </div>
        <div class="form-group">
            <label for="">Max Players</label>
            <input type="number" name="maxplayers" class="form-control {{ $errors->has('maxplayers') ? 'is-invalid'  : '' }}" value="{{ old('maxplayers')}}" placeholder="Max Players">
            <small class="form-text text-muted">Hoeveel spelers mogen er maximaal meedoen.</small>
        </div>
        <div class="form-group">
            <label for="">Min Players</label>
            <input type="number" name="minplayers"  class="form-control {{ $errors->has('minplayers') ? 'is-invalid'  : '' }}" value="{{ old('minplayers')}}" placeholder="Min Players">
            <small class="form-text text-muted">Hoeveel spelers moeten er minimaal meedoen.</small>
        </div>
        <button type="submit" class="btn btn-primary">Blast of your new Competition</button>

  </form>
@endsection


