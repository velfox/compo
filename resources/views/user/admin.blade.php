@extends('compo.layout')

@section('content')

<div class="container mt-4 text-center">
        <div class="jumbotron">
            <h1> Admin </h1>
            <p>Beheer hier onder de gebruikers</p>
            <hr class="my-4">

            <div class="row">
                                    @foreach ($user as $user)
                                    <div class="col-sm d-flex justify-content-center">
                                        <a href="/user/{{ $user->id }}/edit" class="card mt-4 text-center" style="width: 18rem;">
                                            <div  class="card-body" >
                                                <h4 class="card-title">{{ $user->name }}</h4>
                                                <p> {{ $user->email }} </p>
                                                <hr class="my-4">
                                                <button  type="submit" class="btn btn-primary">Bijwerken</button>
                                            </div>
                                        </a>
                                    </div>
                                    @endforeach
                                <hr class="my-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection



