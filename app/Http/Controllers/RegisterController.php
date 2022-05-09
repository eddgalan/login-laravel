<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function show() {
        if( Auth::check() ) {
            return redirect('/home');
        } else {
            return view('register');
        }
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        auth()->login($user);
        return redirect('/home')->with('success', "Account successfully registered.");
    }
}
