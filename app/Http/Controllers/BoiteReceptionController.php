<?php

namespace App\Http\Controllers;

use App\Models\BoiteReception;
use Illuminate\Http\Request;

class BoiteReceptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
        {
            $BoiteReception = BoiteReception::with('utilisateur')->get();
            return $BoiteReception;
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $BoiteReception = new BoiteReception([
            'message' => $request->input('message'),
        ]);
        $BoiteReception->save();

        return response()->json($BoiteReception, 201);
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $BoiteReception = BoiteReception::find($id);
        return response()->json($BoiteReception);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $BoiteReception = BoiteReception::find($id);
        $BoiteReception->update($request->all());
        return response()->json($BoiteReception, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $BoiteReception  = BoiteReception::find($id);
        $BoiteReception ->delete();
        return response()->json('Boite réception supprimée !');
    }
}
