<?php

namespace App\Http\Controllers;

use App\Models\Parametros;
use Illuminate\Http\Request;

class ParametrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Listamos todos los parametros y los mostramos en un json
        $parametros = Parametros::all();
        return response()->json($parametros, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $parametros = new Parametros();
        $parametros->tipo = $request->input('tipo');
        $parametros->valor_minimo = $request->input('valor_minimo');
        $parametros->valor_maximo = $request->input('valor_maximo');
        $parametros->unidad = $request->input('unidad');
        $parametros->save();
        return response()->json($parametros, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Parametros $parametros)
    {
        // Mostramos un parametro en especifico
        return response()->json($parametros, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Parametros $parametros)
    {
        // Actualizamos un parametro en especifico
        $parametros->nombre = $request->input('nombre', $parametros->nombre);
        $parametros->valor = $request->input('valor', $parametros->valor);
        $parametros->descripcion = $request->input('descripcion', $parametros->descripcion);
        $parametros->save();
        return response()->json($parametros, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Parametros $parametros)
    {
        // Eliminamos un parametro en especifico
        $parametros->delete();
        return response()->json(null, 204);
    }
}
