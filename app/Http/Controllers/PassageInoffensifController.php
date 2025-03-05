<?php

namespace App\Http\Controllers;

use App\Models\PassageInoffensif;
use Illuminate\Http\Request;

class PassageInoffensifController extends Controller
{
    // Affiche la liste de tous les passages inoffensifs
    public function index()
    {
        $passages = PassageInoffensif::all();
        return view('passage_inoffensif.index', compact('passages'));
    }

    // Affiche le formulaire de création d'un nouveau passage inoffensif
    public function create()
    {
        return view('passage_inoffensif.create');
    }

    // Stocke un nouveau passage inoffensif dans la base de données
    public function store(Request $request)
    {
        $request->validate([
            'date_entree' => 'required|date',
            'date_sortie' => 'required|date|after_or_equal:date_entree',
            'navire'      => 'required|string|max:255',
        ]);

        PassageInoffensif::create($request->all());

        return redirect()->route('passage_inoffensifs.index')
                         ->with('success', 'Passage inoffensif créé avec succès.');
    }

    // Supprime un passage inoffensif
    public function destroy($id)
    {
        $passage = PassageInoffensif::findOrFail($id);
        $passage->delete();

        return redirect()->route('passage_inoffensifs.index')
                         ->with('success', 'Passage inoffensif supprimé avec succès.');
    }
}
