<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Produit;
use App\Models\Commande;
use App\Models\detailscommande;
use Illuminate\Support\Facades\Redis;
use Stripe\Stripe;


class CommanderController extends Controller
{
    public function commander(Request $request)
    {
        //Pour Stripe
        $onetwo = "hello world";
        //code redis de base
        $count = Redis::dbsize();
        $idkey = [];
        $idkey = Redis::keys('*');
        $montant = 0 ;
        for ($i=0 ; $i < $count ; $i++)  {
            $qt = Redis::get($idkey[$i]);
            $prix = Produit::where('id',$idkey[$i])->get()->first();
            //$prixCAD = $prix->prixCAD ;
            $prixCAD = $prix->prixCAD ;
            $qtn = (int)$qt; 
            $montant += $qtn * $prixCAD ;
        }

        //insertion in table client
        $client = new Client;
        $client->nom = $request->input('Nom');
        $client->pays = $request->input('Pays');
        $client->ville = $request->input('Ville');
        $client->email = $request->input('Email');
        $client->prenom = $request->input('Prenom');
        $client->numeroTel = $request->input('Numero');
        $client->codePostal = $request->input('Codepostal');
        $client->save();

        $idCli = $client->id;

        //insertion in table commande
        $commande = new Commande;
        $commande->client_id = $idCli;
        $commande->statut = "En attente";
        $commande->montant = $montant;
        $commande->save();
        //fin commande code

        $idCmd = $commande->id;

        //insertion in table details

        for ($y=0 ; $y < $count ; $y++) { 
            $details = new detailscommande;
            $details->produit_id = $idkey[$y];
            $details->qteProd = Redis::get($idkey[$y]);
            $details->commande_id = $idCmd;
            $details->save();
        }

        if($request->has('cardBanque')){
            dd($onetwo);
        }

        for ($z=0 ; $z < $count ; $z++) {
            Redis::del($idkey[$z]);
        }


        return back()->with('msg','Commande enregistré');
    }
}
