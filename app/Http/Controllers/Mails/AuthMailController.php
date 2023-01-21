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

        $registerEmail = new RegisterEmail($user);

        return $registerEmail;

        Mail::to('mathsuzart@outlook.com')->send($registerEmail)
        ->cc('email@gmail.com')
        ->bcc('email12@gmail.com')
        ->send($registerEmail);


    }
}
