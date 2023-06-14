<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

   protected $fillable = [
    'nom',
    'email',
    'montant',
    'transaction_id',
    'charge_id',
    'adresse',
    'code_postal',
    'ville',
    'telephone',
    'type',
    'methode',
    'livraison',
    'prix_livraison'
];

}
