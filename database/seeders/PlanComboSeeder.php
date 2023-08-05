<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PlanComboSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'nombre' => 'Plan Básico',
                'precio' => 500,
                'id_plan_internet' => 1,
                'id_plan_tvcable' => 1,
                'id_plan_llamada' => 1,
            ],
            [
                'nombre' => 'Plan Intermedio',
                'precio' => 1000,
                'id_plan_internet' => 2,
                'id_plan_tvcable' => 2,
                'id_plan_llamada' => 2,
            ],
            [
                'nombre' => 'Plan Avanzado',
                'precio' => 1500,
                'id_plan_internet' => 3,
                'id_plan_tvcable' => 3,
                'id_plan_llamada' => 3,
            ],
            // Agrega más planes aquí si es necesario
        ];

        foreach ($plans as $plan) {
            DB::table('combos_promo')->insert([
                'nombre' => $plan['nombre'],
                'precio' => $plan['precio'],
                'id_plan_internet' => $plan['id_plan_internet'],
                'id_plan_tvcable' => $plan['id_plan_tvcable'],
                'id_plan_llamada' => $plan['id_plan_llamada'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
