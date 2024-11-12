<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Auricular;


class AuricularController extends Controller
{
    public function index()
    {
        return response()->json(Auricular::all());
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'precio' => 'required|numeric|min:0',
        ]);

        $auricular = Auricular::create($request->all());
        return response()->json($auricular, 201);
    }

    public function show($id)
    {
        $auricular = Auricular::find($id);
        if (!$auricular) {
            return response()->json(['message' => 'Auricular no encontrado'], 404);
        }
        return response()->json($auricular);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'string|max:255',
            'marca' => 'string|max:255',
            'modelo' => 'string|max:255',
            'precio' => 'numeric|min:0',
        ]);

        $auricular = Auricular::find($id);
        if (!$auricular) {
            return response()->json(['message' => 'Auricular no encontrado'], 404);
        }
        $auricular->update($request->all());
        return response()->json($auricular);
    }

    public function destroy($id)
    {
        $auricular = Auricular::find($id);
        if (!$auricular) {
            return response()->json(['message' => 'Auricular no encontrado'], 404);
        }
        $auricular->delete();
        return response()->json(['message' => 'Auricular eliminado']);
    }
}
