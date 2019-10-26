@extends('layout')

@section('content')
    <h1> create a new compo </h1>
  <form action="/compo" method="post">
    {{ csrf_field() }}
    <input type="text" name="name" placeholder="naam game">
    <input type="test" name="gamemode" placeholder="gamemode">
    <input type="date" name="date">
    <input type="number" name="maxplayers" id="">
    <input type="number" name="minplayers" id="">
    <input type="submit" value="submit">
  </form>
@endsection
