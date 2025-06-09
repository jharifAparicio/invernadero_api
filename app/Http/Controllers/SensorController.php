<?php

namespace App\Http\Controllers;

use App\Models\Sensor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SensorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sensors = Sensor::all();
        return response()->json($sensors, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'temperatura' => 'nullable|numeric',
            'humedad' => 'nullable|numeric',
            'luz' => 'nullable|numeric',
        ]);

        // Guarda temperatura (dispositivo_id = 2)
        if (isset($data['temperatura'])) {
            DB::table('sensors')->insert([
                'dispositivo_id' => 2,
                'temperature' => $data['temperatura'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Guarda humedad (dispositivo_id = 1)
        if (isset($data['humedad'])) {
            DB::table('sensors')->insert([
                'dispositivo_id' => 1,
                'humidity' => $data['humedad'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Guarda luz (dispositivo_id = 3)
        if (isset($data['luz'])) {
            DB::table('sensors')->insert([
                'dispositivo_id' => 3,
                'percentajeLight' => $data['luz'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        return response()->json(['mensaje' => 'Datos guardados correctamente'], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sensor $sensor)
    {
        // Mostramos un sensor en especifico
        return response()->json($sensor, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sensor $sensor) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sensor $sensor)
    {
        //
    }
}
