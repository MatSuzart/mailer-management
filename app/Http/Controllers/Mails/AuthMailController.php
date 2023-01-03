<?php

namespace App\Http\Controllers\Mails;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthMailController extends Controller
{
    public function sendMail(){
        $registerEmail = new RegisterEmail();

        return $registerEmail;

        Mail::to('mathsuzart@outlook.com')->send($registerEmail);

    }
}
