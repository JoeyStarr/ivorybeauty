<?php

namespace App\Http\Classe;

use App\Models\Categorie;
use App\Http\Controllers\RedisController;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;

class men
{
	private $Categorie;
	private $keysall;
	private $valeur = [[]];
	private $panier = [[]];
	public function __construct($Categorie,$keysall,$valeur,$panier){
		$this->Categorie = $Categorie;
		$this->keysall = $keysall;
		$this->valeur = $valeur;
		$this->panier = $panier;
	}
	public function menu()
	{
		$this->Categorie = Categorie::all();
		$this->keysall = Redis::keys('*');
		foreach($this->keysall as $key){
			array_push($this->valeur,[$key,Redis::get($key)]);
			array_push($this->panier,Produit::find($key));
		}
		array_shift($this->valeur);
		array_shift($this->panier);
		return [$this->Categorie,$this->keysall];
	}
}