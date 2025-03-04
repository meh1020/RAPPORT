<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cabotage;

class CabotageController extends Controller
{
     // Affiche la liste de tous les enregistrements
     public function index()
     {
         $cabotages = Cabotage::all();
         return view('surveillance.cabotage.index', compact('cabotages'));

     }
 
     // Affiche le formulaire de création
     public function create()
     {
         return view('surveillance.cabotage.create');
     }
 
     // Enregistre un nouveau enregistrement dans la base de données
     public function store(Request $request)
     {
         // Valider les données du formulaire
         $validated = $request->validate([
             'date' => 'required|date',
             'provenance' => 'required|string|max:255',
             'navires' => 'required|string|max:255',
             'equipage' => 'required|integer',
             'passagers' => 'required|integer',
         ]);
 
         // Créer le nouvel enregistrement
         Cabotage::create($validated);
 
         // Rediriger vers la liste avec un message de succès
         return redirect()->route('cabotage.index')->with('success', 'Enregistrement effectué avec succès !');
     }

     // Supprime un enregistrement spécifique
        public function destroy($id)
        {
            $cabotage = Cabotage::find($id);

            if (!$cabotage) {
                return redirect()->route('cabotage.index')->with('error', 'Enregistrement non trouvé.');
            }

            $cabotage->delete();

            return redirect()->route('cabotage.index')->with('success', 'Enregistrement supprimé avec succès.');
        }

}
