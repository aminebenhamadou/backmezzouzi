<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Affiche une liste des ressources.
     */
    public function index()
    {
        $admins = Admin::all()->toArray();
        return array_reverse($admins);
    }

    /**
     * Stocke une nouvelle ressource.
     */
    public function store(Request $request)
    {
        $admin = new Admin([
            // Attribuez les valeurs spécifiques à un administrateur
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            // Assignez d'autres attributs spécifiques à un administrateur
        ]);
        $admin->save();

        return response()->json($admin, 201);
    }

    /**
     * Affiche la ressource spécifiée.
     */
    public function show($id)
    {
        $admin = Admin::find($id);
        return response()->json($admin);
    }

    /**
     * Met à jour la ressource spécifiée dans le stockage.
     */
    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->update($request->all());
        return response()->json($admin, 200);
    }

    /**
     * Supprime la ressource spécifiée du stockage.
     */
    public function destroy($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return response()->json('Admin supprimé !');
    }
}
