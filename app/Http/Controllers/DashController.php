<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Commande;
use App\Models\detailscommande;
use App\Models\Produit;
use DB;

class DashController extends Controller
{

    public function connectU(){
        return view('pages/panelcontrol/authentification');
    }

    public function connecticut(Request $request){
        $admin = $request->adminn;
        $password = $request->motpass;
        if($admin=="geronimo"){
            if($password=="Joshua_777"){
                DB::update('update users set admin = 1 where id = 1');
                return redirect()->route('vash');
            }else{
                echo "Echec to connect" ;
            }
        }    
    }
    public function deconnecticut(){
        DB::update('update users set admin = 0 where id = 1');
        return view('pages/panelcontrol/authentification');
    }

    public function dash(){
        $stampede =DB::table('clients')
                ->join('commandes', 'clients.id', '=', 'commandes.client_id')
                ->join('detailscommandes', 'commandes.id', '=', 'detailscommandes.commande_id')
                ->join('produits', 'detailscommandes.produit_id', '=', 'produits.id')
                ->select('clients.id','nom','email','numeroTel','pays','ville','codePostal','statut','created_at','qteProd','nameProd','prixCFA','commandes.id')
                ->get();
        return view('pages/panelcontrol/dashboard',compact('stampede'));
    }

    public function delete($commande){
        $commande = (int)$commande;
        $id_client = DB::select('SELECT client_id FROM commandes WHERE id=?',[$commande]);
        $id_client = $id_client[0]->client_id;
        DB::delete('DELETE FROM commandes WHERE id=?',[$commande]);
        DB::delete('DELETE FROM clients WHERE id=?',[$id_client]);
        return redirect()->route('vash');
    }
}
