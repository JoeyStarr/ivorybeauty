<?php

namespace App\Http\Controllers;

use App\Mail\IvoryMarkdownMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;

class mailcontrol extends Controller
{
    public function bar(Request $request)
    {
        $email = 'tondossamakader@gmail.com';
        $body = [];
        $body = [
            'emailuser'=>$request->email,
            'usercontenu'=>$request->commentaire
        ];
        Mail::to($email)->send(new IvoryMarkdownMail($body));
        return back()->with('status','Mail sent successfully');
    }
}
