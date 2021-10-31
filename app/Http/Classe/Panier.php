<?php

namespace App\Http\Classe;
use Illuminate\Http\Request;


class panier 
{
	private $session;

	public function __construct(Request $request)
	{
		$this->session = $request->session();
	}


	public function add($id,$quantity)
	{
		$this->session->push('panier',[
				'id'=>$id,
				'quantity'=>$quantity
		]);
	}
}