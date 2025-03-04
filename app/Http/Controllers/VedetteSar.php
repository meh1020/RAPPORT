<?php

namespace App\Http\Controllers;

use App\Models\Vedette;
use Illuminate\Http\Request;

class VedetteSar extends Controller
{
    /**
     * Affiche la liste des cabotages.
     */
    public function index()
    {
        $vedettes = Vedette::all();
        return view('surveillance.vedette_sar.index', compact('vedettes'));
    }

    /**
     * Affiche le formulaire de création d'un cabotage.
     */
    public function create()
    {
        return view('surveillance.vedette_sar.create');
    }

    /**
     * Stocke un nouveau cabotage dans la base de données.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'unite_sar'          => 'required|string|max:255',
            'total_interventions'=> 'required|string|max:255',
            'total_pob'          => 'nullable|integer',
            'total_survivants'   => 'nullable|integer',
            'total_morts'        => 'nullable|integer',
            'total_disparus'     => 'nullable|integer',
        ]);

        Vedette::create($validatedData);

        return redirect()->route('vedette_sar.index')->with('success', 'Cabotage créé avec succès !');
    }


    /**
     * Supprime un cabotage de la base de données.
     */
    public function destroy($id)
    {
        $vedettes = Vedette::findOrFail($id);
        $vedettes->delete();

        return redirect()->route('vedette_sar.index')->with('success', 'Cabotage supprimé avec succès !');
    }
}
