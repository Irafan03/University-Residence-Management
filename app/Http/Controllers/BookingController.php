<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Client;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    // 🔹 Liste des réservations
    public function index()
    {
        $bookings = Booking::with(['client', 'room'])->get();
        return view('bookings.index', compact('bookings'));
    }

    // 🔹 Formulaire de réservation
    public function create()
    {
        $clients = Client::all();
        $rooms = Room::where('status', 'disponible')->get();
        return view('bookings.create', compact('clients', 'rooms'));
    }

    // 🔹 Enregistrer une réservation
    public function store(Request $request)
    {
        $request->validate([
            'client_id' => 'required|exists:clients,id',
            'room_id' => 'required|exists:rooms,id',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'type_paiement' => 'required',
        ]);

        Booking::create($request->all());

        // Mettre à jour le statut de la chambre
        $room = Room::find($request->room_id);
        $room->increment('nbr_louee');

        if ($room->type == 'individuelle' || ($room->type == 'double' && $room->nbr_louee >= 2)) {
            $room->update(['status' => 'louée']);
        }

        return redirect()->route('bookings.index')->with('success', 'Réservation enregistrée');
    }

    // 🔹 Supprimer une réservation
    public function destroy(Booking $booking)
    {
        $booking->delete();
        return redirect()->route('bookings.index')->with('success', 'Réservation supprimée');
    }
}
