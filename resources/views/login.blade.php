@extends('template')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <form action="/login" method="POST">
            @csrf
            <div class="col-md-12 py-1">
                <input type="text" class="form-control" name="username" placeholder="Username" required>
            </div>
            <div class="col-md-12 py-1">
                <input type="password" class="form-control" name="password" placeholder="********" required>
            </div>
            <div class="col-md-12 py-1">
                <button class="btn btn-success w-100" type="submit"> Login </button>
            </div>
        </form>
    </div>
@endsection
