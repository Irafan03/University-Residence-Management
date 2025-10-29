<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    // Afficher tous les clients
    public function index()
    {
        $clients = Client::all();
        return view('clients.index', compact('clients'));
    }

    // Afficher le formulaire de création
    public function create()
    {
        return view('clients.create');
    }

    // Enregistrer un nouveau client
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email|unique:clients',
            'telephone' => 'required',
        ]);

        Client::create($request->all());
        return redirect()->route('clients.index')->with('success', 'Client ajouté avec succès');
    }

    // Afficher un client
    public function show(Client $client)
    {
        return view('clients.show', compact('client'));
    }

    // Afficher le formulaire d’édition
    public function edit(Client $client)
    {
        return view('clients.edit', compact('client'));
    }

    // Mettre à jour un client
    public function update(Request $request, Client $client)
    {
        $client->update($request->all());
        return redirect()->route('clients.index')->with('success', 'Client mis à jour avec succès');
    }

    // Supprimer un client
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index')->with('success', 'Client supprimé');
    }
}
