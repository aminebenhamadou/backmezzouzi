<?php

namespace App\Http\Controllers;

use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Affiche une liste des ressources.
     */
    public function index()
    {
        $utilisateur = Utilisateur::all()->toArray();
        return array_reverse($utilisateur);
    }

    /**
     * Stocke une nouvelle ressource.
     */
    public function store(Request $request)
    {
        $utilisateur = new Utilisateur([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'image' => $request->input('image')
        ]);
        $utilisateur->save();

        return response()->json($utilisateur, 201);
    }

    /**
     * Affiche la ressource spécifiée.
     */
    public function show($id)
    {
        $utilisateur = Utilisateur::find($id);
        return response()->json($utilisateur);
    }

    /**
     * Met à jour la ressource spécifiée dans le stockage.
     */
    public function update(Request $request, $id)
    {
        $utilisateur = Utilisateur::find($id);
        $utilisateur->update($request->all());
        return response()->json($utilisateur, 200);
    }

    /**
     * Supprime la ressource spécifiée du stockage.
     */
    public function destroy($id)
    {
        $utilisateur = Utilisateur::find($id);
        $utilisateur->delete();
        return response()->json('Utilisateur supprimée !');
    }
}
