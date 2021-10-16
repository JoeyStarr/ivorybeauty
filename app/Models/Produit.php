<?php

namespace App\Models;

use App\Models\Categorie;
use App\Models\ImgProd;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function ImgProds()
    {
        return $this->hasMany(ImgProd::class);
    }
}
