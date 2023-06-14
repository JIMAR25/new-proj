<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urgence extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'description',
        'montant_demande',
        'montant_actuel',
        'date_limite',
        'payment_amount',
    ];

    protected $dates = [
        'date_limite',
    ];

    // public function donations()
    // {
    //     return $this->hasMany(Donation::class);
    // }
    // public function totalDonations()
    // {
    //     return $this->urgences->sum('montant');
    // }
}


    