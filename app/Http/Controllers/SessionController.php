<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Classe\Panier;

class SessionController extends Controller
{
    public function setsession(panier $panier,$id,$quantity)
    {
        $panier->add($id,$quantity);
        return back()->with('msg', 'The Message');
    }

    public function getsession(Request $request)
    {
        $value = $request->session()->get('panier');
        $objet = (object)$value;
        return view('pages/session',compact('objet'));
    }
    public function delsession(Request $request)
    {
        $request->session()->forget('panier');
        return back()->with('msg','The Delete'); 
    }
}
