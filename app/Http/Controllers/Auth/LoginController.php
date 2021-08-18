<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(Request $request) {
        return view('auth.login');
    }

    function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        // call api
        $body = [
            'email' => $email,
            'password' => $password,
        ];
        $result = callApi('/auth', 'post', $body, null, false);

        if ($result->code == 200 && $result->data->token != "" && $result->data->token != null) {
            session()->put('jwt_token', 'Bearer ' . $result->data->token);
            session()->put('user_id', $result->data->user_id);
            return redirect()->route('home');
        }

        return redirect()->route('login')->with([
            'invalid' => 'Wrong email or password.',
            'email' => $email
        ]);
    }
}
