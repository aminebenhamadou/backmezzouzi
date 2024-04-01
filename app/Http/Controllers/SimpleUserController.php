<?php

namespace App\Http\Controllers;

use App\Models\SimpleUser;
use Illuminate\Http\Request;

class SimpleUserController extends Controller
{
    /**
     * Affiche une liste des ressources.
     */
    public function index()
    {
        $simpleUsers = SimpleUser::all()->toArray();
        return array_reverse($simpleUsers);
    }

    /**
     * Stocke une nouvelle ressource.
     */
    public function store(Request $request)
    {
        $simpleUser = new SimpleUser([
            // Attribuez les valeurs spécifiques à un utilisateur simple
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            // Assignez d'autres attributs spécifiques à un utilisateur simple
        ]);
        $simpleUser->save();

        return response()->json($simpleUser, 201);
    }

    /**
     * Affiche la ressource spécifiée.
     */
    public function show($id)
    {
        $simpleUser = SimpleUser::find($id);
        return response()->json($simpleUser);
    }

    /**
     * Met à jour la ressource spécifiée dans le stockage.
     */
    public function update(Request $request, $id)
    {
        $simpleUser = SimpleUser::find($id);
        $simpleUser->update($request->all());
        return response()->json($simpleUser, 200);
    }

    /**
     * Supprime la ressource spécifiée du stockage.
     */
    public function destroy($id)
    {
        $simpleUser = SimpleUser::find($id);
        $simpleUser->delete();
        return response()->json('Utilisateur simple supprimé !');
    }
}
