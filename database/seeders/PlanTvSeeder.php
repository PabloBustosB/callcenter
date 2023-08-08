<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PlanTvSeeder extends Seeder
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
                'nombre' => 'Plan TV esencial',
                'precio' => 160,
            ],
            [
                'nombre' => 'Plan TV intermedio',
                'precio' => 215,
            ],
            [
                'nombre' => 'Plan TV superior',
                'precio' => 273,
            ],
            // Agrega más planes aquí si es necesario
        ];

        foreach ($plans as $plan) {
            DB::table('plan_tv_cables')->insert([
                'nombre' => $plan['nombre'],
                'precio' => $plan['precio'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }//
    }
}
