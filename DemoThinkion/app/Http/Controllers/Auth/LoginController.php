<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Mostrar formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('login');
    }

    // Enviar datos del formulario de inicio de sesión
    public function login(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar iniciar sesión
        if (Auth::attempt($request->only('email', 'password'))) {
            // Inicio de sesión exitoso, redirigir a la página principal
            return redirect('/');
        }

        // Si el inicio de sesión falla, redirigir de vuelta al formulario con un mensaje de error
        return back()->withInput()->withErrors([
            'email' => 'Credenciales incorrectas.',
        ]);
    }

    // Cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
