<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationController extends Controller
{
    /**
     * Affiche la liste de toutes les destinations.
     */
    public function index()
    {
        $destinations = Destination::paginate(10);
        return view('destinationmada.index', compact('destinations'));
    }

    /**
     * Affiche le formulaire de création d'une nouvelle destination.
     */
    public function create()
    {
        return view('destinationmada.create');
    }

    /**
     * Stocke une nouvelle destination dans la base de données.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Destination::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->back()->with('success', 'Destination ajoutée avec succès.');
    }

    public function destroy(Destination $destination)
    {
        $destination->delete();
        return redirect()->route('destinations.index')
                         ->with('success', 'Destination supprimée avec succès.');
    }
}
