<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiciosContratados;
use Carbon\Carbon;

class ServicioContratadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 5; $i++) { // Cambia 10 al número de tuplas que desees
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
                'observacion' => 'Observación para el servicio ' . $i,
                'id_plan_internet' => $idPlanInternet,
                'id_plan_tvcable' => $idPlanTvcable,
                'id_plan_llamada' => $idPlanLlamada,
                'id_combo_promo' => $idComboPromo,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];

            ServiciosContratados::create($servicioData);
        }
    }
}
