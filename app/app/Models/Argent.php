<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Argent extends Model
{
    use HasFactory;

    /**
     * Les attributs qui sont assignables en masse.
     *
     * @var array
     */
    protected $fillable = [
        'nom',
        'email',
        'montant'
    ];
}
