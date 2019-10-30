@extends('compo.layout')

@section('content')
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-4">{{ $compo->name }} <span class="badge badge-secondary">{{$compo->date }}</span> </h1>
            <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <hr class="my-4">
            <div class="row">
                    <div class="col-sm">
                            <p>max players: <span class="badge badge-light">{{ $compo->maxplayers }}</span></p>
                    </div>
                    <div class="col-sm">
                            <p>min players: <span class="badge badge-light">{{ $compo->minplayers }}</span></p>
                    </div>
                    <div class="col-sm">
                            <p>min players: <span class="badge badge-light">{{ $compo->minplayers }}</span></p>
                    </div>
                  </div>
            <hr class="my-4">
                @if($compo->results->count())
                <p> resultaten </p>
                @foreach ($compo->results as $result)
                <div class="row">
                    <div class="col-sm">
                            <p>naam <span class="badge badge-light">{{ $result->user_id }}</span></p>
                    </div>
                    <div class="col-sm">
                            <p>plaats <span class="badge badge-light">{{ $result->place }}</span></p>
                    </div>
                    <div class="col-sm">
                            <p>punten <span class="badge badge-light">{{ $compo->minplayers }}</span></p>
                    </div>
                  </div>
                @endforeach
            @else
                <p> Nog geen resultaten bekend </p>
            @endif


            @php $test = count($compo->summoner);  @endphp

                  <h1> {{$test}} </h1>
            @php  $jup = "inschrijfen"  @endphp
            @foreach ($compo->summoner as $result)
                @if ($result->user_id ==  Auth::user()->id )
                    @php $jup = "uitschrijfen"  @endphp
                    @break
                @else
                    @php
                    $jup = "inschrijfen"
                    @endphp
                @endif
            @endforeach

            <hr class="my-4">
            @if ($jup == "inschrijfen")
            <form action="/summoner" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="competition_id" value="{{$compo->id}}">
            <button type="submit" class="btn btn-primary btn-lg" href="#" role="button">{{ $jup }}</button>
            </form>
            @else
            <form action="/summoner/{{$compo->id}}" method="post">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <input type="hidden" name="competition_id" value="{{$compo->id}}">
                <button type="submit" class="btn btn-danger btn-lg">uitschrijfen</button>
            </form>
            @endif
                <a class="btn btn-primary btn-lg" href="/compo/{{ $compo->id }}/edit" role="button">bewerken</a>
            <a class="btn btn-primary btn-lg" href="/compo" role="button">terug</a>
        </div>
    </div>


@endsection
