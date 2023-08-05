<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Factura; // Asegúrate de que la ruta sea correcta

class FacturaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Factura::create([
            'fecha' => '2023-02-12',
            'monto' => 229,
            'id_servicio_contratado' => 1,
        ]);

        Factura::create([
            'fecha' => '2023-02-28',
            'monto' => 1500,
            'id_servicio_contratado' => 2,
        ]);
    }
}
