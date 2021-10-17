<?php

namespace App\Http\Controllers;

use App\Mail\ivorymail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailcontrol extends Controller
{
    public function bar(Request $request)
    {
        $emailuser = $request->email;
        $usercontenu = $request->commentaire;
        Mail::to('tondossamakader@gmail.com')->send(new ivorymail($emailuser,$usercontenu));
    }
}
