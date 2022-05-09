@extends('template')

@section('content')
    <div class="container w-25 p-4 mt-4 custom-card">
        <form action="{{ route('register_post') }}" method="POST">
            <h2 class="text-center"> Register </h2>
            @csrf
            @include('messages')
            <div class="col-md-12 py-1 form-floating">
                <input type="text" class="form-control" name="name" placeholder="Name" required>
                <label for="name" class="form-label">Name</label>
            </div>
            <div class="col-md-12 py-1 form-floating">
                <input type="text" class="form-control" name="lastname" placeholder="Lastname" required>
                <label for="lastname" class="form-label">Lastname</label>
            </div>
            <div class="col-md-12 py-1 form-floating">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
                <label for="username" class="form-label">Username</label>
            </div>
            <div class="col-md-12 py-1 form-floating">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
                <label for="email" class="form-label">Email</label>
            </div>
            <div class="col-md-12 py-1 form-floating">
                <input type="password" class="form-control" name="password" placeholder="password" required>
                <label for="password" class="form-label">password</label>
            </div>
            <div class="col-md-12 py-1 form-floating">
                <input type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required>
                <label for="password_confirmation" class="form-label">confirm password</label>
            </div>
            <div class="col-md-12 py-1 form-floating">
                <button class="btn btn-success w-100" type="submit"> Create acount </button>
            </div>
            <div class="col-md-12 text-end">
                <a href="{{ route('login') }}"> Login </a>
            </div>
        </form>
    </div>
@endsection
