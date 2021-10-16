<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImgProd extends Model
{
    use HasFactory;

    public function ImgProd()
    {
        return $this->belongsTo(Produit::class);
    }
}
