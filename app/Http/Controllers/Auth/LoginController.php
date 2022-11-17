<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    use AuthenticatesUsers;



    public function showLoginForm()
    {
        return view('login');
    }

    public function authenticated()
    {
        return redirect()->route('index');
    }
}
