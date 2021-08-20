<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index(Request $request)
    {
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

        if ($result->code == 200) {
            session()->put('jwt_token', 'Bearer ' . $result->data->token);
            session()->put('user_id', $result->data->user_id);
            session()->put('role', $result->data->role);
            session()->put('status', $result->data->status);
            session()->put('display_name', $this->get_display_name());
            return redirect()->route('home');
        }

        return redirect()->route('login')->with([
            'invalid' => 'Wrong email or password.',
            'email' => $email
        ]);
    }

    private function get_display_name()
    {
        $result = callApi('/profile/me', 'get', null, null);
        return $result->data->grade . $result->data->part . ' ' . $result->data->last_name . $result->data->first_name;
    }
}
