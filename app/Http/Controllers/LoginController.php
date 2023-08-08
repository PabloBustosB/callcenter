<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register(Request $request){
        $user = new User();

        $user->nombre = $request->nombre;
        $user->cedula = $request->ci;
        $user->direccion = $request->dir;
        $user->telefono = $request->telefono;
        $user->tipo = 'usuario';
        $user->estado = 'a';
        $user->username = $request->username;
        $user->email = $request->dir;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user);

        return redirect(route('home'));
    }

    public function login(Request $request){
        // Validacion
        $credenciales  = [
            "username" => $request->username,
            "password" => $request->password
        ];

        $recuerda = ($request->has('remember') ? true:false);

        if (Auth::attempt($credenciales,$recuerda)) {
            $request->session()->regenerate();
            return redirect()->intended(route('home'));
        }else{
            return redirect('login');
        }
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('login'));
    }
}
