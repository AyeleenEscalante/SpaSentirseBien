<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Retorna la vista para el panel de administración
        return view('admin.panel');
    }
}
