<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index(){

        //Pour Stripe
        $product_for_stripe = []; 
        $YOUR_DOMAIN = 'http://127.0.0.1:8000';
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

            $product_for_stripe[] = [
              'price_data' => [
                'currency' => 'usd',
                'product_data' => [
                  'name' => $prix->nameProd,
                  'images' => [$YOUR_DOMAIN.$prix->illust],
                ],
                'unit_amount' => $prix->prixCAD * 100,
              ],
              'quantity' => $qtn,
            ];
        }
        
        $curl = new \Stripe\HttpClient\CurlClient([CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1]);
        $curl->setEnableHttp2(false);
        \Stripe\ApiRequestor::setHttpClient($curl);

        Stripe::setApiKey('sk_test_51JjWfVCyegDYejRvxEVZAHiCtgzy1tW5WLWPCxVLDhnrLmG4XbhVG6x1kOEzkaNPxJiNjo27DjeyHXCJWNcZsJ0G005UjLljF3
            ');
        $checkout_session = \Stripe\Checkout\Session::create([
        'line_items' => [
           $product_for_stripe 
        ],
        'mode' => 'payment',
        'success_url' => $YOUR_DOMAIN . '/success.html',
        'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
        ]);
    } 
}
