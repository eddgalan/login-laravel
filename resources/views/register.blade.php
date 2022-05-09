@extends('template')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form action="/register" method="POST">
            @csrf
            <div class="col-md-12 py-1">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
            </div>
            <div class="col-md-12 py-1">
                <input type="text" class="form-control" name="lastname" placeholder="Lastname" required>
            </div>
            <div class="col-md-12 py-1">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="col-md-12 py-1">
                <input type="email" class="form-control" name="email" placeholder="somebody@email.com" required>
            </div>
            <div class="col-md-12 py-1">
                <input type="password" class="form-control" name="password" placeholder="password" required>
            </div>
            <div class="col-md-12 py-1">
                <input type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required>
            </div>
            <div class="col-md-12 py-1">
                <button class="btn btn-success w-100" type="submit"> Registrarse </button>
            </div>
        </form>
    </div>
@endsection
