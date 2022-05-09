@extends('template')

@section('content')
    <h1> Home </h1>
    @auth
        <p>Bienvenido(a) <strong> {{ auth()->user()->name ?? auth()->user()->username }}</strong>.</p>
    @endauth

    @guest
        <p> Inicia sesión para ver el contenido. puedes registrarte en el siguiente <a href="{{ route('login') }}">link </a> </p>
    @endguest
@endsection
