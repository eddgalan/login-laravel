@extends('template')

@section('content')
    <div class="container w-25 border p-4 mt-4 custom-card">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="col-md-12 py-1 form-floating">
                <input type="text" class="form-control" name="username" placeholder="Username or email" required>
                <label for="username" class="form-label">Username or email</label>
            </div>
            <div class="col-md-12 py-1 form-floating">
                <input type="password" class="form-control" name="password" placeholder="Password" required>
                <label for="password" class="form-label">Password</label>
            </div>
            <div class="col-md-12 py-1 form-floating">
                <button class="btn btn-success w-100" type="submit"> Login </button>
            </div>
            <div class="col-md-12 text-end">
                <a href="{{ route('register') }}"> Create acount </a>
            </div>
        </form>
    </div>
@endsection
