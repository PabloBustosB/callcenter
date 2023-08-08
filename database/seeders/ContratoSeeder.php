<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contrato; // Asegúrate de que la ruta sea correcta
use Faker\Factory as Faker;

class ContratoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 36; $i < 42; $i++) {


            Contrato::create([
                'fecha_inicio' => null,
                'fecha_fin' => null,
                'estado' => 'Completado',
                'nombre_facturacion' => $faker->name,
                'nit' => $faker->numerify('#########'),
                'id_servicio_contratado' => $faker->numberBetween(1, 10),
                'id_usuario' => 9,
            ]);
        }
        // Contrato::create([
        //     'fecha_inicio' => null,
        //     'fecha_fin' => null,
        //     'estado' => 'Completado',
        //     'nombre_facturacion' => $faker->name,
        //     'nit' => $faker->numerify('#########'),
        //     'id_servicio_contratado' => $faker->numberBetween(1, 10),
        //     'id_usuario' => 13,
        // ]);
    }
}
