<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
    public function index($mail)
    {
        $data = [
            'subject' => 'Alpaka News Mail',
            'body' => 'Hello and Welcome to the Alpaka News!'
        ];
        try {
            Mail::to($mail)->send(new WelcomeMail($data));
            return response()->json(['You have registered successfully,check your mail box!']);

        } catch (Exception $th) {
            return response()->json(['Something went wrong!']);

        }

    }
}
