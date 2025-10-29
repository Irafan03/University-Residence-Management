<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'room_id',
        'date_debut',
        'date_fin',
        'type_paiement', // mensuel ou annuel
        'status',        // en attente, approuvée, refusée
    ];

    //Relation vers le client
    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    //Relation vers la chambre
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
