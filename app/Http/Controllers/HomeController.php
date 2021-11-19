<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Produit;
use App\Models\ImgProd;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\RedisController;
use Illuminate\Support\Facades\Redis;

class HomeController extends Controller
{
    //Accueil
    public function index()
    {
        $keysall = Redis::keys('*');
        $valeur = [];
        $panier=[];
        foreach($keysall as $key){
            array_push($valeur,[$key,Redis::get($key)]);
            array_push($panier,Produit::find($key));
        }
        return view('/pages/homepage',compact(['panier','valeur']));
    }

    //PAGE APROPOS 
    public function about()
    {
        $keysall = Redis::keys('*');
        $valeur = [];
        $panier=[];
        foreach($keysall as $key){
            array_push($valeur,[$key,Redis::get($key)]);
            array_push($panier,Produit::find($key));
        }
        return view('pages/apropos',compact(['panier','valeur']));
    }

    //PAGE CONTACT 
    public function contacte()
    {
        $Categorie = Categorie::all();
        $keysall = Redis::keys('*');
        $valeur = [];
        $panier=[];
        foreach($keysall as $key){
            array_push($valeur,[$key,Redis::get($key)]);
            array_push($panier,Produit::find($key));
        }
        $Categorie = Categorie::all();
        
        return view('pages/contact',compact(['Categorie','panier','valeur']));
    }
    //PAGE CATEGORIE
    public function categorie3dN(){
        $categorie = Categorie::find(1);
        $keysall = Redis::keys('*');
        $valeur = [];
        $panier=[];
        foreach($keysall as $key){
            array_push($valeur,[$key,Redis::get($key)]);
            array_push($panier,Produit::find($key));
        }
        return view('pages/categorie',compact('categorie','panier','valeur'));
    }

    public function categorie7dV(){
        $categorie = Categorie::find(2);
        $keysall = Redis::keys('*');
        $valeur = [];
        $panier=[];
        foreach($keysall as $key){
            array_push($valeur,[$key,Redis::get($key)]);
            array_push($panier,Produit::find($key));
        }
        return view('pages/categorie',compact('categorie','panier','valeur'));
    }
    public function categorie3dBT(){
        $categorie = Categorie::find(3);
        $keysall = Redis::keys('*');
        $valeur = [];
        $panier=[];
        foreach($keysall as $key){
            array_push($valeur,[$key,Redis::get($key)]);
            array_push($panier,Produit::find($key));
        }
        return view('pages/categorie',compact('categorie','panier','valeur'));
    }

    public function categorieSOIE(){
        $categorie = Categorie::find(4);
        $keysall = Redis::keys('*');
        $valeur = [];
        $panier=[];
        foreach($keysall as $key){
            array_push($valeur,[$key,Redis::get($key)]);
            array_push($panier,Produit::find($key));
        }
        return view('pages/categorie',compact('categorie','panier','valeur'));
    }

    //PAGE PRODUIT 
    public function produits($name)
    {
        $Categorie = Categorie::all();
        $name = Produit::where('nameProd',$name)->get();
        $nom = $name['0']['nameProd'];
        $id = $name['0']['id'];
        $images = ImgProd::where('produit_id',$id)->get();
        $keysall = Redis::keys('*');
        $valeur = [];
        $panier=[];
        foreach($keysall as $key){
            array_push($valeur,[$key,Redis::get($key)]);
            array_push($panier,Produit::find($key));
        }
        return view('pages/produit',compact(['Categorie','images','nom','panier','valeur']));
    }


    //POUR LE FORMULAIRE
    public function formulaire(Request $request,$id)
    {
        $quantite = $request->quantity;
        $iden = $id;
        Redis::set($iden,$quantite);
        if ($request->has('ensession')){
            return back()->with('msg','The Message');
        }
        if ($request->has('prvalider')){
            return redirect()->action(
                [ValidController::class,'valider']
            );
        }
    }

    // PAGE POLITIQUE - CONFIDENTIALIT2
    public function confident()
    {
        $keysall = Redis::keys('*');
        $valeur = [];
        $panier=[];
        foreach($keysall as $key){
            array_push($valeur,[$key,Redis::get($key)]);
            array_push($panier,Produit::find($key));
        }
        
        return view('pages/politique/confidentialite',compact(['panier','valeur']));
    }

    
    // PAGE POLITIQUE - REMBOURSEMENT
    public function rembourser()
    {
        $keysall = Redis::keys('*');
        $valeur = [];
        $panier=[];
        foreach($keysall as $key){
            array_push($valeur,[$key,Redis::get($key)]);
            array_push($panier,Produit::find($key));
        }

        return view('pages/politique/remboursement',compact(['panier','valeur']));
    }

}
