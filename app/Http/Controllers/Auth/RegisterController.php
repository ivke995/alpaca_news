<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Models\Country;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{

    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $countries = Country::all();

        return view('register', compact('countries'));
    }

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
        $this->create($request->all());
        (new MailController)->index($request->email);
        return redirect('login')->with('success', 'You have registered successfully,check your email!');
    }

    protected function validator(array $data)
    {
        return Validator::make($data,[
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:users',
            'phone'     => 'numeric',
            'mobile_phone' => 'numeric',
            'city'      => 'required|string',
            'country'   => 'required',
            'is_female'    => 'required',
            'password'  => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);
    }

    protected function create(array $data)
    {
         User::create([
           'name'       => $data['name'],
           'email'      => $data['email'],
           'phone'      => $data['phone'],
           'mobile'     => $data['mobile_phone'],
           'city'       => $data['city'],
           'country_id'    => $data['country'],
           'is_female'     => $data['is_female'],
           'password'   => Hash::make($data['password']),
        ]);
    }


}
