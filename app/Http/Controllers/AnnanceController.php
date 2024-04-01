<?php

namespace App\Http\Controllers;

use App\Models\Annance;
use Illuminate\Http\Request;

class AnnanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $Annance = Annance::all()->toArray();
        return array_reverse($Annance);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Annance = new Annance([
            'titre' => $request->input('titre'),
            'contenu' => $request->input('contenu'),
            'datecreation' => $request->input('datecreation'),
            'utilisateur_id' => $request->input('utilisateur_id'),
            'scategorieID' => $request->input('scategorieID'),
        ]);
        $Annance->save();

        return response()->json($Annance, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $Annance = Annance::find($id);
        return response()->json($Annance);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $Annance = Annance::find($id);
        $Annance->update($request->all());
        return response()->json($Annance, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $Annance  = Annance::find($id);
        $Annance ->delete();
        return response()->json('Annance supprimée !');
    }
}
