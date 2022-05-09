@extends('template')

@section('content')
    <h1> Home </h1>
    @auth
        <p>Bienvenido <strong> {{ auth()->user()->name ?? auth()->user()->username }}</strong>, estás autenticado </p>
        <p><a href="/logout">Logout</a></p>
    @endauth

    @guest
        <p> Inicia sesión para ver el contenido. puedes registrarte en el siguiente <a href="/login">link </a> </p>
    @endguest
@endsection
