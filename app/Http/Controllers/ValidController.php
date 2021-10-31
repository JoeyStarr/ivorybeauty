<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidController extends Controller
{
    public function valider()
    {
        return view('pages/validation');
    }
}
