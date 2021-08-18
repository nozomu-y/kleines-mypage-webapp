<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Request $request)
    {
        $result = callApi('/profile/me', 'get', null, null);
        return view('home')->with(['data' => $result->data]);
    }
}
