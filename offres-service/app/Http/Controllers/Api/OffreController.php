<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Offre; 
use Illuminate\Http\Request;

class OffreController extends Controller
{
// Controller methods
public function index()
{
    $offres = Offre::all();
    return response()->json($offres);
}

public function show($id)
{
    $offre = Offre::findOrFail($id);
    return response()->json($offre);
}

public function store(Request $request)
{
    $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'date_publication' => 'required|date',
    ]);

    $offre = Offre::create($request->all());
    return response()->json($offre, 201); // Return created offer with 201 status code
}

public function update(Request $request, $id)
{
    $request->validate([
        'titre' => 'required|string|max:255',
        'description' => 'required|string',
        'date_publication' => 'required|date',
    ]);

    $offre = Offre::findOrFail($id);
    $offre->update($request->all());
    return response()->json($offre);
}

public function destroy($id)
{
    $offre = Offre::findOrFail($id);
    $offre->delete();
    return response()->json(['message' => 'Offre deleted successfully']);
}

}
