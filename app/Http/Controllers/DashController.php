<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
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
                return redirect()->route('dashi');
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
        $clients = Client::all();
        return view('pages/panelcontrol/dashboard',compact('clients'));
    }

    public function dlC($id){
        $users = Client::find($id);
        $users->delete();
        return redirect()->route('dashi');
    }
}
