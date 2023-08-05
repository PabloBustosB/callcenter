<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PlanLlamadaSeeder extends Seeder
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
                'minutos' => '200',
                'credito' => '100',
                'cantidadmb' => 4000,
                'precio' => 160,
            ],
            [
                'minutos' => '400',
                'credito' => '200',
                'cantidadmb' => 8000,
                'precio' => 200,
            ],
            [
                'minutos' => '800',
                'credito' => '400',
                'cantidadmb' => 16000,
                'precio' => 250,
            ],
            // Agrega más planes aquí si es necesario
        ];

        foreach ($plans as $plan) {
            DB::table('plan_llamadas')->insert([
                'minutos' => $plan['minutos'],
                'credito' => $plan['credito'],
                'cantidadmb' => $plan['cantidadmb'],
                'precio' => $plan['precio'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }//
    }
}
