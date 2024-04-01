<?php

namespace App\Http\Controllers;

use App\Models\SousCategorie;
use Illuminate\Http\Request;

class SousCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scategorie = SousCategorie::all()->toArray();
        return array_reverse($scategorie);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $scategorie = new SousCategorie([
            'nomscategorie' => $request->input('nomscategorie'),
            'imagescategorie' => $request->input('imagescategorie'),
            'categorieID' => $request->input('categorieID'),
            ]);
            $scategorie->save();
            return response()->json($scategorie,201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $scategorie = SousCategorie::find($id);
        return response()->json($scategorie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $scategorie = SousCategorie::find($id);
        $scategorie->update($request->all());
        return response()->json($scategorie,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $scategorie = SousCategorie::find($id);
        $scategorie->delete();
        return response()->json('Scategorie supprimée !');
    }

    public function showSCategorieByCAT($idcat)
    {
    $Scategorie= SousCategorie::where('categorieID', $idcat)->with('categories')->get();
    return response()->json($Scategorie);
    }
}
