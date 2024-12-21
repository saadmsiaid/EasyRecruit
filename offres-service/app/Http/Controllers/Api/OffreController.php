<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Offre; 
use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function index()
    {
        $offres = Offre::all(); 
        return response()->json($offres);
    }

    public function store(Request $request)
    {
        $offre = Offre::create($request->all()); 
        return response()->json($offre, 201);
    }

    public function show($id)
    {
        $offre = Offre::findOrFail($id); 
        return response()->json($offre);
    }

    public function update(Request $request, $id)
    {
        $offre = Offre::findOrFail($id); 
        $offre->update($request->all()); 
        return response()->json($offre);
    }

    public function destroy($id)
    {
        $offre = Offre::findOrFail($id); 
        $offre->delete(); 
        return response()->json(null, 204);
    }
}
