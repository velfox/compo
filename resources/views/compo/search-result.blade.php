@extends('compo.layout')


@section('content')

<div class="container">
        <div class="jumbotron mt-4 text-center">
            <h1>Er zijn @php $aantal = count($compos);  @endphp {{$aantal}} resultaten gevonden </h1>
            <p> je kunt zoeken op compo naam en gamemode </p>
        <div class="row">
            @forelse($compos as $compo)
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
            @empty

            <div class="col-sm d-flex justify-content-center">
                <div class="mt-4 text-center" style="width: 18rem;">
                    <form action="/search" method="POST" class="form-inline my-2 my-lg-0 ">
                        {{ csrf_field() }}
                        <input name="search" class="form-control mr-sm-2" type="search" placeholder="try again" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">zoek</button>
                    </form>
                </div>
            </div>

            @endforelse
        </div>
    </div>
</div>

@endsection



