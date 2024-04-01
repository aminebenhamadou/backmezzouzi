<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Affiche une liste des ressources.
     */
    public function index()
    {
        $profil = Profil::with('utilisateur')->get();
        return $profil;
    }
    

    /**
     * Stocke une nouvelle ressource.
     */
    public function store(Request $request)
    {
        $profil = new Profil([
            'login' => $request->input('login'),
            'password' => $request->input('password'),
            'utilisateur_id' => $request->input('utilisateur_id')
        ]);
        $profil->save();

        return response()->json($profil, 201);
    }

    /**
     * Affiche la ressource spécifiée.
     */
    public function show($id)
    {
        $profil = Profil::find($id);
        return response()->json($profil);
    }

    /**
     * Met à jour la ressource spécifiée dans le stockage.
     */
    public function update(Request $request,$id)
    {
        $profil = Profil::find($id);
        $profil->update($request->all());
        return response()->json($profil, 200);
    }

    /**
     * Supprime la ressource spécifiée du stockage.
     */
    public function destroy($id)
    {
        $profil = Profil::find($id);
        $profil->delete();
        return response()->json('Profil supprimée !');
    }
}
