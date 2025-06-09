<?php

namespace Database\Seeders;

use App\Models\Dispositivo;
use App\Models\Parametros;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        Dispositivo::factory()->create([
            'nombre' => 'FC-28',
            'descripcion' => 'sensor de humedad y temperatura economico',
            'tipo' => 'sensor',
        ]);
        Dispositivo::factory()->create([
            'nombre' => 'DHT11',
            'descripcion' => 'sensor de humedad y temperatura economico',
            'tipo' => 'sensor',
        ]);
        Dispositivo::factory()->create([
            'nombre' => 'LDR',
            'descripcion' => 'fotoresistencia para medir luz',
            'tipo' => 'sensor',
        ]);

        
        Parametros::factory()->create([
            'tipo' => 'Humedad',
            'valor_minimo' => 50,
            'valor_maximo' => NULL,
            'unidad' => '%',
        ]);
        Parametros::factory()->create([
            'tipo' => 'Temperatura',
            'valor_minimo' => 25,
            'valor_maximo' => 30,
            'unidad' => '°C',
        ]);
        Parametros::factory()->create([
            'tipo' => 'Luz',
            'valor_minimo' => 60,
            'valor_maximo' => NULL,
            'unidad' => '%',
        ]);
    }
}
