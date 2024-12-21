<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Candidature;
use Illuminate\Http\Request;

class CandidatureController extends Controller
{
    public function index()
    {
        $candidatures = Candidature::all();
        return response()->json($candidatures);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        $candidature = Candidature::create($request->all());
        return response()->json($candidature, 201);
    }

    public function show($id)
    {
        $candidature = Candidature::find($id);

        if (!$candidature) {
            return response()->json(['message' => 'Candidature not found'], 404);
        }

        return response()->json($candidature);
    }

    public function update(Request $request, $id)
    {
        $candidature = Candidature::find($id);

        if (!$candidature) {
            return response()->json(['message' => 'Candidature not found'], 404);
        }

        $request->validate([
            'name' => 'string|max:255',
            'email' => 'email',
        ]);

        $candidature->update($request->all());
        return response()->json($candidature);
    }

    public function destroy($id)
    {
        $candidature = Candidature::find($id);

        if (!$candidature) {
            return response()->json(['message' => 'Candidature not found'], 404);
        }

        $candidature->delete();
        return response()->json(['message' => 'Candidature deleted successfully']);
    }
}
