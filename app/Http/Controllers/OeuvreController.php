<?php

namespace App\Http\Controllers;

use App\Models\Oeuvre;
use App\Models\Categorie;
use Illuminate\Http\Request;

class OeuvreController extends Controller
{
    /**
     * Affiche toutes les œuvres.
     */
    public function index()
    {
        $oeuvres = Oeuvre::all();
        return view('oeuvres.index', compact('oeuvres'));
    }

    /**
     * Affiche le formulaire de création.
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('oeuvres.create', compact('categories'));
    }

    /**
     * Enregistre une œuvre.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'artiste' => 'required|string|max:255',
            'annee_creation' => 'required|integer|min:1000|max:' . date('Y'),
            'prix' => 'required|numeric|min:0',
            'date_acquisition' => 'required|date',
            'categorie_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'photo' => 'nullable|string',
        ]);

        Oeuvre::create($validated);

        return redirect()->route('oeuvres.index')->with('success', 'Œuvre ajoutée avec succès.');
    }

    /**
     * Affiche une œuvre.
     */
    public function show(string $id)
    {
        $oeuvre = Oeuvre::findOrFail($id);
        return view('oeuvres.show', compact('oeuvre'));
    }

    /**
     * Affiche le formulaire d'édition.
     */
    public function edit(string $id)
    {
        $oeuvre = Oeuvre::findOrFail($id);
        $categories = Categorie::all();
        return view('oeuvres.edit', compact('oeuvre', 'categories'));
    }

    /**
     * Met à jour une œuvre.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'artiste' => 'required|string|max:255',
            'annee_creation' => 'required|integer|min:1000|max:' . date('Y'),
            'prix' => 'required|numeric|min:0',
            'date_acquisition' => 'required|date',
            'categorie_id' => 'required|exists:categories,id',
            'description' => 'nullable|string',
            'photo' => 'nullable|string',
        ]);

        $oeuvre = Oeuvre::findOrFail($id);
        $oeuvre->update($validated);

        return redirect()->route('oeuvres.index')->with('success', 'Œuvre mise à jour avec succès.');
    }

    /**
     * Supprime une œuvre.
     */
    public function destroy(string $id)
    {
        $oeuvre = Oeuvre::findOrFail($id);
        $oeuvre->delete();

        return redirect()->route('oeuvres.index')->with('success', 'Œuvre supprimée avec succès.');
    }
}
