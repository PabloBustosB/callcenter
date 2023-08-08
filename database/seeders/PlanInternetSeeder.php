<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class PlanInternetSeeder extends Seeder
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
                'nombre' => 'Plan wifi hogar esencial',
                'velocidad' => '35 Mbps',
                'precio' => 169,
            ],
            [
                'nombre' => 'Plan wifi hogar intermedio',
                'velocidad' => '60 Mbps',
                'precio' => 229,
            ],
            [
                'nombre' => 'Plan wifi hogar superior',
                'velocidad' => '165 Mbps',
                'precio' => 565,
            ],
            // Agrega más planes aquí si es necesario
        ];

        foreach ($plans as $plan) {
            DB::table('planinternets')->insert([
                'nombre' => $plan['nombre'],
                'velocidad' => $plan['velocidad'],
                'precio' => $plan['precio'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
