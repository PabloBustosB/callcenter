<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Interaccion;
use App\Models\OrdenTrabajo;
use Carbon\Carbon;
use App\Models\ServiciosContratados;
use App\Models\Contrato;
use App\Models\ServicioContratado;
use App\Models\Factura; 

class Cargar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 3; $i++) {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Faker\Provider\es_ES\Person($faker));
        $fecha_rnd = $faker->dateTimeBetween('2023-08-10', '2023-10-31');
        $fecha = $fecha_rnd->format('Y-m-d');
        $fecha_mas_dia = $fecha_rnd->modify('+1 day');
        $id_tipo_serv = $faker->numberBetween(1, 3);
        $id_user = $faker->numberBetween(3, 30);

        if ($id_tipo_serv == 3) { // Informacion
            $porcenta = $faker->numberBetween(40, 60).' %';
            Interaccion::create([
                'fecha' => $fecha,
                'descripcion' => $porcenta,
                'id_tipo_servicio_tecnico' => $id_tipo_serv, // Considerando que tienes 3 tipos de servicio técnico
                'id_usuario' => $id_user // Considerando que tienes usuarios registrados desde el ID 3 al 18
            ]);
        }
        if ($id_tipo_serv == 1) {   // Instalación
            $porcenta = $faker->numberBetween(50, 90).' %';
            Interaccion::create([
                'fecha' => $fecha,
                'descripcion' => $porcenta,
                'id_tipo_servicio_tecnico' => $id_tipo_serv, // Considerando que tienes 3 tipos de servicio técnico
                'id_usuario' => $faker->numberBetween(3, 30), // Considerando que tienes usuarios registrados desde el ID 3 al 18
            ]);

            OrdenTrabajo::create([
                'fecha_visita' => $fecha_mas_dia->format('Y-m-d'),
                'problema' => $faker->sentence(5),
                'resultado' => $faker->sentence(5),
                'estado' => $faker->randomElement(['pendiente', 'en progreso', 'completado']),
                'descripcion' => $faker->paragraph(3),
                'fecha_hora_visita_llegada' => $fecha_mas_dia->format('Y-m-d'),
                'fecha_hora_visita_salida' => $fecha_mas_dia->format('Y-m-d'),
                'id_tecnico' => $faker->numberBetween(1, 3), // Considerando que tienes 5 técnicos en la tabla correspondiente
                'id_interaccion' => Interaccion::max('id'), // Considerando que tienes 20 interacciones en la tabla correspondiente
             ]);

            $idPlanInternet = null;
            $idPlanTvcable = null;
            $idPlanLlamada = null;
            $idComboPromo = null;

            $rand = rand(1, 4);

            switch ($rand) {
                case 1:
                    $idPlanInternet = rand(2, 4);
                    break;
                case 2:
                    $idPlanTvcable = rand(2, 4);
                    break;
                case 3:
                    $idPlanLlamada = rand(2, 4);
                    break;
                case 4:
                    $idComboPromo = rand(2, 4);
                    break;
            }

            $servicioData = [
                'estadoservicio' => 'Activo',
                'observacion' => 'Observación para el servicio ',
                'id_plan_internet' => $idPlanInternet,
                'id_plan_tvcable' => $idPlanTvcable,
                'id_plan_llamada' => $idPlanLlamada,
                'id_combo_promo' => $idComboPromo,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            ServiciosContratados::create($servicioData);

            Contrato::create([
                'fecha_inicio' => null,
                'fecha_fin' => null,
                'estado' => 'Completado',
                'nombre_facturacion' => $faker->name,
                'nit' => $faker->numerify('#########'),
                'id_servicio_contratado' => ServicioContratado::max('id'),
                'id_usuario' => $id_user,
            ]);

            Factura::create([
                'fecha' => $fecha,
                'monto' => $faker->numberBetween(160, 1000) ,
                'id_servicio_contratado' => ServicioContratado::max('id'),
            ]);
        }

        if ($id_tipo_serv == 2) { // Revision de equipos
            $porcenta = $faker->numberBetween(-40, -90).' %';
            Interaccion::create([
                'fecha' => $fecha,
                'descripcion' => $porcenta,
                'id_tipo_servicio_tecnico' => $id_tipo_serv, // Considerando que tienes 3 tipos de servicio técnico
                'id_usuario' => $faker->numberBetween(3, 30), // Considerando que tienes usuarios registrados desde el ID 3 al 18
            ]);

            OrdenTrabajo::create([
                'fecha_visita' => $fecha_mas_dia->format('Y-m-d'),
                'problema' => $faker->sentence(5),
                'resultado' => $faker->sentence(5),
                'estado' => $faker->randomElement(['pendiente', 'en progreso', 'completado']),
                'descripcion' => $faker->paragraph(3),
                'fecha_hora_visita_llegada' => $fecha_mas_dia->format('Y-m-d'),
                'fecha_hora_visita_salida' => $fecha_mas_dia->format('Y-m-d'),
                'id_tecnico' => $faker->numberBetween(1, 3), // Considerando que tienes 5 técnicos en la tabla correspondiente
                'id_interaccion' => Interaccion::max('id'), // Considerando que tienes 20 interacciones en la tabla correspondiente
             ]);
        }
        
        

        
        
    }
}
}
