<?php

namespace App\Http\Controllers\Mails;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthMailController extends Controller
{
    public function sendMail(){
        $user  = new User();
        $user->name = 'MATHEUS SUZART';
        $registerEmail = new RegisterEmail($user->name);

        return $registerEmail;

        Mail::to('mathsuzart@outlook.com')->send($registerEmail);

    }
}
