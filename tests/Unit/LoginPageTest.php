<?php

namespace Tests\Unit;

/*use PHPUnit\Framework\TestCase;*/
use Tests\TestCase;
use Illuminate\Support\Facades\Artisan;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginPageTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_carga_pagina_login()
    {
        $response = $this->get('/');
        $response->assertSee('Login');
        $response->assertStatus(200);
    }

    public function test_logearse_con_credenciales_validos()
    {
        Artisan::call('migrate');
        User::create([
            'nombre'=>'Pier', 'cedula'=>'45249',
            'direccion'=>'Pailon', 'telefono'=>'112233',
            'tipo'=>'usuario', 'estado'=>'a',
            'username'=>'pier', 'email'=>'pier@gmail.com',
            'password'=>Hash::make('987'),
        ]);
        $valido = $this->post('/inicia-sesion', [ 'username'=>"pier", 'password'=>"987" ]);
        $valido->assertStatus(302)->assertRedirect('/home');

    }
}
