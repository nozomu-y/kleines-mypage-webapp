<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    function logout(Request $request)
    {
        session()->invalidate();
        return redirect()->route('login');
    }
}
