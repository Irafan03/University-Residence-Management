<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',      // individuelle ou double
        'prix',
        'status',    // louée ou disponible
        'nbr_louee', // 0, 1, 2
    ];

    // 🔗 Une chambre peut avoir plusieurs réservations
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
