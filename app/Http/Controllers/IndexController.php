<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function login(){
        return view('login');
    }

    public function iniciarSesion(Request $request){

        $usuario = Usuario::where('correo',$request->correo)->first();
        if($usuario->contrasena == $request->contrasena){
            return view('perfil',compact('usuario'));

        }
        return view('login');
    }
}
