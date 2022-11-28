<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class MailController extends Controller
{
    public function index()
    {
        $data = [
            'subject' => 'Alpaka News Mail',
            'body' => 'Hello and Welcome to the Alpaka News!'
        ];
        try {
            Mail::to('majaradinovic98@yahoo.com')->send(new WelcomeMail($data));
            return response()->json(['This is great,check your mail box!']);

        } catch (Exception $th) {
            return response()->json(['Something went wrong!']);

        }

    }
}
