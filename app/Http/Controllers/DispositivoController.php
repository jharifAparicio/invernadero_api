<?php

namespace App\Http\Controllers;

use App\Models\Dispositivo;
use Illuminate\Http\Request;

class DispositivoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // listamos todos los dispositivos, y lo mostramos en un json 
        $dispositivos = Dispositivo::all();
        return response()->json($dispositivos,200);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // resiviremos el recurso y lo guardaremos en la base de datos
        $dispositivo = new Dispositivo();
        $dispositivo->nombre = $request->input('nombre');
        $dispositivo->descripcion = $request->input('descripcion');
        $dispositivo->save();
        return response()->json($dispositivo, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dispositivo $dispositivo)
    {
        // mostramos un dispositivo en especifico
        return response()->json($dispositivo, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dispositivo $dispositivo)
    {
        // actualizamos un dispositivo en especifico
        $dispositivo->nombre = $request->input('nombre', $dispositivo->nombre);
        $dispositivo->descripcion = $request->input('descripcion', $dispositivo->descripcion);
        $dispositivo->save();
        return response()->json($dispositivo, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dispositivo $dispositivo)
    {
        // eliminamos un dispositivo en especifico
        $dispositivo->delete();
        return response()->json(null, 204);
    }
}
