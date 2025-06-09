<?php

namespace App\Http\Controllers;

use App\Models\Actuador;
use Illuminate\Http\Request;

class ActuadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Listamos todos los actuadores y los mostramos en un json
        $actuadores = Actuador::all();
        return response()->json($actuadores, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Guardamos los valores de los actuadores en la base de datos
        $actuador = new Actuador();
        $actuador->dispositivo_id = $request->input('dispositivo_id');
        $actuador->estado = $request->input('estado');
        $actuador->save();
        return response()->json($actuador, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Actuador $actuador)
    {
        // Mostramos un actuador en especifico
        return response()->json($actuador, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Actuador $actuador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Actuador $actuador)
    {
        //
    }
}
