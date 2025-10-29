<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'cin',
        'date_naissance',
        'niveau_scolaire',
        'universite',
        'attestation_scolaire',
        'attestation_medicale',
    ];

    // Relation : un client peut avoir une seule réservation
    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}
