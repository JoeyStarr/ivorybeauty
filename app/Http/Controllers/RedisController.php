<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RedisController extends Controller
{
    public function setredis($id,$quantity)
    {
        Redis::set($id,$quantity);
        return back()->with('msg','The Message');
    }

    public function getredis()
    {
        $value = Redis::get();
    }

    public function modify(Request $request,$id)
    {   
        if($request->has('more')){
            Redis::incr($id);
            return back()->with('succes','Ajouter avec succès');
        }
        if($request->has('less')){
            $tt = Redis::get($id);
            if($tt>0){
                Redis::decr($id);
                return back()->with('succes','Reduire avec succès');
            }
            if($tt==0){
                Redis::del($id);
                return back()->with('succes','Supprimer avec succès');
            }
            
        }
    }
}
