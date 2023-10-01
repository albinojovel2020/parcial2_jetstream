<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        // Lógica de autenticación aquí

        // Si la autenticación es exitosa, puedes redirigir a una página de inicio
        return redirect('/home')->with('success', '¡Sesión iniciada correctamente!');
    }

}