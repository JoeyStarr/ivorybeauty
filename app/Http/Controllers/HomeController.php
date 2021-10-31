<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\ImgProd;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    //Accueil
    public function index(Request $request)
    {
        $panier = $request->session()->get('panier');
        $Categorie = Categorie::all();
        return view('/pages/homepage',compact(['Categorie','panier']));
    }

    //PAGE APROPOS 
    public function about()
    {
        $Categorie = Categorie::all();

        return view('pages/apropos',compact('Categorie'));
    }

    //PAGE CONTACT 
    public function contacte()
    {
        $Categorie = Categorie::all();
        
        return view('pages/contact',compact('Categorie'));
    }
    //PAGE CATEGORIE
    public function categories($id)
    {
        $Categorie = Categorie::all();
        $showw = Categorie::find($id);
        return view('pages/categorie',compact(['Categorie','showw']));
    }

    //POUR LE FORMULAIRE
    public function formulaire(Request $request,$id)
    {
        $quantite = $request->quantity;
        $iden = $id;
        if ($request->has('ensession')){
            return redirect()->action(
                [SessionController::class,'setsession'],['id'=>$iden,'quantity'=>$quantite]
            );
        }
        if ($request->has('prvalider')){
            return redirect()->action(
                [ValidController::class,'valider'],['id'=>$iden,'quantity'=>$quantite]
            );
        }
    }

    //PAGE PRODUIT 
    public function produits($id)
    {
        $Categorie = Categorie::all();
        $images = ImgProd::where('produit_id',$id)->get();

        return view('pages/produit',compact(['Categorie','images']));
    }

    // PAGE POLITIQUE - CONFIDENTIALIT2
    public function confident()
    {
        $Categorie = Categorie::all();
        
        return view('pages/politique/confidentialite',compact('Categorie'));
    }

    
    // PAGE POLITIQUE - REMBOURSEMENT
    public function rembourser()
    {
        $Categorie = Categorie::all();
        
        return view('pages/politique/remboursement',compact('Categorie'));
    }
}
