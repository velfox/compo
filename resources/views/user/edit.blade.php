@extends('compo.layout')

@section('content')

<div class="container mt-4 text-center">
        <div class="jumbotron">
            <h1> {{ $user->name }} </h1>
            <p>Pas hier onder jou gegevens aan.</p>
            <hr class="my-4">
            @if ($errors->any())
                <div class="alert alert-warning" role="alert">
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </div>
            @endif
            <div class="row">
                    <div class="col-sm d-flex justify-content-center">
                        <div class="mt-4 text-center" style="width: 18rem;">
                                <form action="/user/{{$user->id}}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}

                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="name" name="name" class="form-control  {{ $errors->has('name') ? 'is-invalid'  : '' }}" value="{{$user->name }}" placeholder="Game name">
                                        <small class="form-text text-muted">je naam.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" class="form-control  {{ $errors->has('email') ? 'is-invalid'  : '' }}" value="{{$user->email }}" placeholder="Min Players">
                                        <small class="form-text text-muted">zo kunnen we jou berijken.</small>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Bijwerken</button>
                                </form>
                                <hr class="my-4">
                        </div>

                    </div>
                </div>
                    <form action="/user/{{$user->id}}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class="btn btn-danger">verwijder acount</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection



