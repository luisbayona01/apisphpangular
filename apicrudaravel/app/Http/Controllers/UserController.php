<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{ 
  public function index()
{
    $usuarios = User::all();
    return response()->json($usuarios);
}

public function store(Request $request)
{   

    $usuario = new User;
    $usuario->nombre = $request->input('nombre');
    $usuario->apellido = $request->input('apellido');
    $usuario->edad = $request->input('edad');
    $usuario->foto = $request->input('foto');
    $usuario->tipo_documento = $request->input('tipo_documento');
    $usuario->id_rol = $request->input('rol_id');
    $usuario->save();
    return response()->json([
                    "exito"=> true,
                    "accion"=> $usuario
                ],200);
}

public function update(Request $request)
{   $id=$request->input('id');
    $usuario = User::find($id);
    $usuario->nombre = $request->input('nombre');
    $usuario->apellido = $request->input('apellido');
    $usuario->edad = $request->input('edad');
    $usuario->foto = $request->input('foto');
    $usuario->tipo_documento = $request->input('tipo_documento');
    $usuario->id_rol = $request->input('rol_id');
    $usuario->save();
   return response()->json([
                    "exito"=> true,
                    "accion"=> $usuario
                ],200);
}


public function destroy($id)
{
    $usuario = User::find($id);
    $usuario->delete();

  return response()->json([
                    "exito"=> true,
                    "accion"=>'Usuario eliminado exitosamente'
                ],200);
  
}


}