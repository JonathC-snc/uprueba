<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Pais;
use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        return view(('perfil'));
    }

    public function create(){
        $paises = Pais::all()->sortBy('nombre');
        $ciudades = Ciudad::all();
        return view('register',compact('paises'),compact('ciudades'));
    }

    public function store(Request $request){
        $usuario = new Usuario();
        $usuario->nombre_usuario = $request->nombre_usuario;
        $usuario->correo = $request->correo;
        $usuario->contrasena = $request->contrasena;
        $usuario->nombre = $request->nombre;
        $usuario->apellido = $request->apellido;
        $usuario->fecha_nac= $request->fecha_nac;
        $usuario->sexo = $request->sexo;
        $usuario->id_ciudad = 1;

        $usuario->save();
        return $request;
    }
}
