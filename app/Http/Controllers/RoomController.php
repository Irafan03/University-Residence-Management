<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // 🔹 Afficher toutes les chambres
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    // 🔹 Formulaire d’ajout
    public function create()
    {
        return view('rooms.create');
    }

    // 🔹 Enregistrer une nouvelle chambre
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'prix' => 'required|numeric',
            'status' => 'required',
            'nbr_louee' => 'required|integer|min:0',
        ]);

        Room::create($request->all());
        return redirect()->route('rooms.index')->with('success', 'Chambre ajoutée avec succès');
    }

    // 🔹 Afficher les détails d’une chambre
    public function show(Room $room)
    {
        return view('rooms.show', compact('room'));
    }

    // 🔹 Formulaire de modification
    public function edit(Room $room)
    {
        return view('rooms.edit', compact('room'));
    }

    // 🔹 Mettre à jour une chambre
    public function update(Request $request, Room $room)
    {
        $room->update($request->all());
        return redirect()->route('rooms.index')->with('success', 'Chambre mise à jour avec succès');
    }

    // 🔹 Supprimer une chambre
    public function destroy(Room $room)
    {
        $room->delete();
        return redirect()->route('rooms.index')->with('success', 'Chambre supprimée');
    }
}
