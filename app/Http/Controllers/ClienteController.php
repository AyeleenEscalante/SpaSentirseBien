<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class ClienteController extends Controller
{
    public function perfil()
    {
        $cliente = Auth::user(); // ya estás autenticado
        return view('cliente.perfil', compact('cliente'));
    }
}
