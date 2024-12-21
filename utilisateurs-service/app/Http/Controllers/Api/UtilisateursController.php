<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateursController extends Controller
{
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return response()->json($utilisateurs);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        $utilisateur = Utilisateur::create($request->all());
        return response()->json($utilisateur, 201);
    }

    public function show($id)
    {
        $utilisateur = Utilisateur::find($id);

        if (!$utilisateur) {
            return response()->json(['message' => 'Utilisateur not found'], 404);
        }

        return response()->json($utilisateur);
    }

    public function update(Request $request, $id)
    {
        $utilisateur = Utilisateur::find($id);

        if (!$utilisateur) {
            return response()->json(['message' => 'Utilisateur not found'], 404);
        }

        $request->validate([
            'name' => 'string|max:255',
            'email' => 'email',
        ]);

        $utilisateur->update($request->all());
        return response()->json($utilisateur);
    }

    public function destroy($id)
    {
        $utilisateur = Utilisateur::find($id);

        if (!$utilisateur) {
            return response()->json(['message' => 'Utilisateur not found'], 404);
        }

        $utilisateur->delete();
        return response()->json(['message' => 'Utilisateur deleted successfully']);
    }
}
