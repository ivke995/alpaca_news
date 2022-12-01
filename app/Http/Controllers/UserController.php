<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public $name;
    public $phone;
    public $mobile;
    public $city;
    public $country;
    public $gender;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
//        $request->ip();
        $user = Auth::user();

        return view('profile', compact('user') );
    }

    public function edit()
    {
        $user = Auth::user();

        return view('profile-edit', compact('user'));
    }

    public function update(Request $request)
    {

    }
}
