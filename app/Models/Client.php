<?php

namespace App\Models;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        "nom",
        "prenom",
        "numeroTel",
        "email","pays",
        "ville",
        "codePostal"
    ];

    public $timestamps = false;

    public function commandes()
    {
        return $this->hasMany(Commande::class);
    }
}
