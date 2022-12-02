<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use App\Models\Country;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

//    public $name;
//    public $phone;
//    public $mobile;
//    public $city;
//    public $country;
//    public $is_female;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
//        $request->ip();
        $user = Auth::user();

        return view('profile', compact('user'));
    }

    public function edit()
    {
        $user = Auth::user();
        $countries = Country::all();


        return view('profile-edit', compact('user', 'countries'));
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = Auth::user();
        $user->update([
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'mobile' => $request->input('mobile'),
            'city' => $request->input('city'),
            'country_id' => $request->input('country'),
            'is_female' => $request->input('is_female')
        ]);
        return redirect('profile')->with('success', 'You have updated your info!');
    }
}
