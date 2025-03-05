<?php

namespace App\Http\Controllers;

use App\Models\SuiviNavireParticulier;
use Illuminate\Http\Request;

class SuiviNavireParticulierController extends Controller
{
    // Affiche la liste des suivis
    public function index()
    {
        $suivis = SuiviNavireParticulier::all();
        return view('suivi_navire_particulier.index', compact('suivis'));
    }

    // Affiche le formulaire de création
    public function create()
    {
        return view('suivi_navire_particulier.create');
    }

    // Stocke un nouveau suivi
    public function store(Request $request)
    {
        $request->validate([
            'date'       => 'required|date',
            'nom_navire' => 'required|string|max:255',
            'mmsi'       => 'required|string|max:255',
            'observations' => 'nullable|string',
        ]);

        SuiviNavireParticulier::create($request->all());

        return redirect()->route('suivi_navire_particuliers.index')
                         ->with('success', 'Suivi créé avec succès.');
    }

    // Supprime un suivi
    public function destroy($id)
    {
        $suivi = SuiviNavireParticulier::findOrFail($id);
        $suivi->delete();

        return redirect()->route('suivi_navire_particuliers.index')
                         ->with('success', 'Suivi supprimé avec succès.');
    }
}
