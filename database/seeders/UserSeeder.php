<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new \Faker\Provider\es_ES\Person($faker));

        for ($i = 1; $i <= 10; $i++) {
            $username = $faker->userName;
            $username = substr($username, 0, 10); // Aseguramos que el username tenga máximo 10 caracteres
            $address = $faker->address;
            $address = substr($address,0, 50); // Aseguramos que address tengo maximo 50 caracteres
            User::create([
                'nombre' => $faker->unique()->name,
                'cedula' => $faker->numerify('########'), // 8 dígitos aleatorios
                'direccion' => $address,
                'telefono' => $faker->numerify('#########'), // 9 dígitos aleatorios
                'tipo' => $faker->randomElement(['usuario']),
                'estado' => $faker->randomElement(['a', 'i']), // 'A' para activo, 'I' para inactivo
                'username' => $username,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password123'), // Asignamos una contraseña común para todos los usuarios (se puede cambiar)
            ]);
        }
    }
}
