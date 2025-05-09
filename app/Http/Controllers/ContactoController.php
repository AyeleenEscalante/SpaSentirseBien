<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class ContactoController extends Controller
{
    public function enviar(Request $request)
    {
        try {
            // Valida los datos del formulario
            $request->validate([
                'nombre' => 'required',
                'mensaje' => 'required',
                'telefono' => ['nullable', Rule::requiredIf(function () use ($request) {
                    return $request->telefono !== null;
                }), 'digits:10'],
            ]);

            // Inserta los datos en la base de datos
            DB::table('contactos')->insert([
                'nombre' => $request->nombre,
                'telefono' => $request->telefono,
                'mensaje' => $request->mensaje,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Retorna una respuesta de éxito en formato JSON
            return response()->json(['success' => true, 'message' => 'Mensaje recibido, nos contactaremos a la brevedad.']);

        } catch (\Illuminate\Validation\ValidationException $e) {
            // Retorna una respuesta de error con los mensajes de validación
            return response()->json(['success' => false, 'message' => $e->errors()['telefono'][0]]);
        } catch (\Exception $e) {
            // Retorna una respuesta de error en formato JSON
            return response()->json(['success' => false, 'message' => 'Mensaje NO enviado, verifica por favor: ' . $e->getMessage()]);
        }
    }
}
