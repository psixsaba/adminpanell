<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;


class WelcomeController extends Controller
{
    public function mailSend() {
        $email = 'gogatishvili51@gmail.com';

        $mailInfo = [
            'title' => 'Welcome New User',
            'url' => 'http://127.0.0.1:8000/'
        ];

        Mail::to($email)->send(new WelcomeMail($mailInfo));

        return redirect()->back();
    }
}
