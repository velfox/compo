@extends('compo.layout')

@section('content')
    <div class="container mt-4 text-center">
        <div class="jumbotron">
            <h1>Aankomde Compo's</h1>
            <p>klik op een compo voor meer informatie</p>
            <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">soorteer op
                    <span class="caret"></span></button>
                    <ul class="dropdown-menu justify-content-center text-center">
                      <li><a href="/compo">Allen compos</a></li>
                      <li><a href="/own/compo">Eigen compos</a></li>
                    </ul>
                  </div>
            <div class="row">
                @foreach ($compo as $compo)
                    <div class="col-sm d-flex justify-content-center">
                        <a href="/compo/{{ $compo->id }}" class="card mt-4 text-center" style="width: 18rem;">
                            <div  class="card-body" >
                                <h4 class="card-title">{{ $compo->name }}</h4>
                                <span class="badge badge-secondary">{{$compo->date }}</span> </p>
                                <hr class="my-4">
                                <div class="row">
                                    <div class="col-sm">
                                        <p>max: <span class="badge badge-light">{{ $compo->maxplayers }}</span></p>
                                    </div>
                                    <div class="col-sm">
                                        <p>min: <span class="badge badge-light">{{ $compo->minplayers }}</span></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection


