<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActualizarUsuarioRequest;
use App\Http\Requests\GuardarUsuarioRequest;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class UsuariosController extends Controller
{
    /**
     * metodo get
     */
    public function index()
    {
        // retorna todos los datos de la tabla usuarios
        return Usuarios::all();
    }

    /**
     * metodo post
     */
    public function store(GuardarUsuarioRequest $request)
    {
        Usuarios::create($request->all());

        return response()->json([
            'res' => true,
            'msg' => 'Usuario almacenado correctamente'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuarios $usuario)
    {
        Log::channel('system')->info('Usuario encontrado con exito');
        return response()->json([
            'res' => true,
            'usuario' => $usuario
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarUsuarioRequest $request, Usuarios $usuario)
    {
        $usuario->update($request->all());
        return response()->json([
            'res' => true,
            'mensaje' => 'Usuario actualizado correctamente'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuarios $usuario)
    {
        $usuario->delete();
        return response()->json([
            'res' => true,
            'mensaje' => 'Usuario eliminado correctamente'
        ], 200);
    }
}
