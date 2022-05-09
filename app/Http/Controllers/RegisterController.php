<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Request\RegisterRequest;

class RegisterController extends Controller
{
    public function show() {
        return view('auth.register');
    }

    public function register(RegisterController $request) {
        $user = User::create($request->validated());
    }
}
