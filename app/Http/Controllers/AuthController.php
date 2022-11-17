<?php

namespace App\Http\Controllers;

use App\Http\Requests\Users\UserStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class AuthController extends Controller
{
    function index()
    {
        return view('login');
    }

    function register()
    {
        return view('register');
    }

    function store(UserStoreRequest $request)
    {
        User::create($request->only('name', 'email', 'password'))->save();

       return redirect('login')->with('success', 'Registration completed');

    }

    function login(UserStoreRequest $request)
    {
//        User::

        return redirect('register');
    }


    function logout()
    {

    }

}
