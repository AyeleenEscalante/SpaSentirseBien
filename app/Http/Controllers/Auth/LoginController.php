<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/servicios'); // redirigir a servicios
        }

        // 👇 TEST: esto te mostrará el cliente autenticado si funciona bien
        dd(Auth::guard('web')->user());  

        return back()->withErrors([
            'email' => 'Las credenciales no son válidas.',
        ])->withInput();
    }
}
