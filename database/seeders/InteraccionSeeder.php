<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Interaccion;

class InteraccionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 10; $i++) {
            $fecha = $faker->dateTimeBetween('2023-08-09', '2023-08-31')->format('Y-m-d');
            Interaccion::create([
                'fecha' => $fecha,
                'descripcion' => $faker->paragraph(3),
                'id_tipo_servicio_tecnico' => $faker->numberBetween(1, 3), // Considerando que tienes 3 tipos de servicio técnico
                'id_usuario' => $faker->numberBetween(3, 13), // Considerando que tienes usuarios registrados desde el ID 3 al 18
            ]);
        }
    }
}
