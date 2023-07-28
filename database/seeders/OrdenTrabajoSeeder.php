<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrdenTrabajo;

class OrdenTrabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        /* OrdenTrabajo::create([ */
        /*    'fecha_visita' => '2023-07-25', */
        /*    'problema' => $faker->sentence(5), */
        /*    'resultado' => $faker->sentence(5), */
        /*    'estado' => $faker->randomElement(['pendiente', 'en progreso', 'completado']), */
        /*    'descripcion' => $faker->paragraph(3), */
        /*    'fecha_hora_visita_llegada' => '2023-07-25 15:30:00', */
        /*    'fecha_hora_visita_salida' => '2023-07-25 16:50:00', */
        /*    'id_tecnico' => $faker->numberBetween(1, 5), // Considerando que tienes 5 técnicos en la tabla correspondiente */
        /*    'id_interaccion' => 34, // Considerando que tienes 20 interacciones en la tabla correspondiente */
        /* ]); */
       /* OrdenTrabajo::create([ */
       /*     'fecha_visita' => '2023-07-06', */
       /*     'problema' => $faker->sentence(5), */
       /*     'resultado' => $faker->sentence(5), */
       /*     'estado' => $faker->randomElement(['pendiente', 'en progreso', 'completado']), */
       /*     'descripcion' => $faker->paragraph(3), */
       /*     'fecha_hora_visita_llegada' => '2023-07-06 08:45:58', */
       /*     'fecha_hora_visita_salida' => '2023-07-06 09:30:12', */
       /*     'id_tecnico' => $faker->numberBetween(1, 5), // Considerando que tienes 5 técnicos en la tabla correspondiente */
       /*     'id_interaccion' => 35, // Considerando que tienes 20 interacciones en la tabla correspondiente */
       /*  ]); */
      OrdenTrabajo::create([
           'fecha_visita' => '2023-07-12',
           'problema' => $faker->sentence(5),
           'resultado' => $faker->sentence(5),
           'estado' => $faker->randomElement(['pendiente', 'en progreso', 'completado']),
           'descripcion' => $faker->paragraph(3),
           'fecha_hora_visita_llegada' => '2023-07-12 11:00:00',
           'fecha_hora_visita_salida' => '2023-07-12 13:00:23',
           'id_tecnico' => $faker->numberBetween(1, 5), // Considerando que tienes 5 técnicos en la tabla correspondiente
           'id_interaccion' => 36, // Considerando que tienes 20 interacciones en la tabla correspondiente
        ]);
      OrdenTrabajo::create([
           'fecha_visita' => '2023-07-13',
           'problema' => $faker->sentence(5),
           'resultado' => $faker->sentence(5),
           'estado' => $faker->randomElement(['pendiente', 'en progreso', 'completado']),
           'descripcion' => $faker->paragraph(3),
           'fecha_hora_visita_llegada' => '2023-07-13 10:45:46',
           'fecha_hora_visita_salida' => '2023-07-12 11:54:32',
           'id_tecnico' => $faker->numberBetween(1, 5), // Considerando que tienes 5 técnicos en la tabla correspondiente
           'id_interaccion' => 37, // Considerando que tienes 20 interacciones en la tabla correspondiente
        ]);
      OrdenTrabajo::create([
           'fecha_visita' => '2023-07-11',
           'problema' => $faker->sentence(5),
           'resultado' => $faker->sentence(5),
           'estado' => $faker->randomElement(['pendiente', 'en progreso', 'completado']),
           'descripcion' => $faker->paragraph(3),
           'fecha_hora_visita_llegada' => '2023-07-11 09:28:41',
           'fecha_hora_visita_salida' => '2023-07-11 11:01:23',
           'id_tecnico' => $faker->numberBetween(1, 5), // Considerando que tienes 5 técnicos en la tabla correspondiente
           'id_interaccion' => 38, // Considerando que tienes 20 interacciones en la tabla correspondiente
        ]);
      OrdenTrabajo::create([
           'fecha_visita' => '2023-07-24',
           'problema' => $faker->sentence(5),
           'resultado' => $faker->sentence(5),
           'estado' => $faker->randomElement(['pendiente', 'en progreso', 'completado']),
           'descripcion' => $faker->paragraph(3),
           'fecha_hora_visita_llegada' => '2023-07-24 15:15:32',
           'fecha_hora_visita_salida' => '2023-07-24 17:02:55',
           'id_tecnico' => $faker->numberBetween(1, 5), // Considerando que tienes 5 técnicos en la tabla correspondiente
           'id_interaccion' => 39, // Considerando que tienes 20 interacciones en la tabla correspondiente
        ]);
      /* OrdenTrabajo::create([ */
      /*      'fecha_visita' => '2023-07-12', */
      /*      'problema' => $faker->sentence(5), */
      /*      'resultado' => $faker->sentence(5), */
      /*      'estado' => $faker->randomElement(['pendiente', 'en progreso', 'completado']), */
      /*      'descripcion' => $faker->paragraph(3), */
      /*      'fecha_hora_visita_llegada' => '2023-07-12 11:45:22', */
      /*      'fecha_hora_visita_salida' => '2023-07-12 14:01:46', */
      /*      'id_tecnico' => $faker->numberBetween(1, 5), // Considerando que tienes 5 técnicos en la tabla correspondiente */
      /*      'id_interaccion' => 32, // Considerando que tienes 20 interacciones en la tabla correspondiente */
      /*   ]); */
       /* OrdenTrabajo::create([ */
       /*     'fecha_visita' => '2023-07-07', */
       /*     'problema' => $faker->sentence(5), */
       /*     'resultado' => $faker->sentence(5), */
       /*     'estado' => $faker->randomElement(['pendiente', 'en progreso', 'completado']), */
       /*     'descripcion' => $faker->paragraph(3), */
       /*     'fecha_hora_visita_llegada' => '2023-07-07 14:12:12', */
       /*     'fecha_hora_visita_salida' => '2023-07-07 16:15:19', */
       /*     'id_tecnico' => $faker->numberBetween(1, 5), // Considerando que tienes 5 técnicos en la tabla correspondiente */
       /*     'id_interaccion' => 33, // Considerando que tienes 20 interacciones en la tabla correspondiente */
       /*  ]); */

    }
}
