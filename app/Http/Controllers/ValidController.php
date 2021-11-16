<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Support\Facades\Redis;

class ValidController extends Controller
{
    public function valider()
    {
        $Categorie = Categorie::all();
        $keysall = Redis::keys('*');
        $valeur = [[]];
        $panier=[[]];
        foreach($keysall as $key)
        {
            array_push($valeur,[$key,Redis::get($key)]);
            array_push($panier,Produit::find($key));
        }
        array_shift($valeur);
        array_shift($panier);
        return view('pages/validation',compact('panier','valeur'));
    }
}
