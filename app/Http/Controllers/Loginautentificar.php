<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\DB;

class Loginautentificar extends Controller
{
    //
    public function vistaLogin(){
        return view('login');
    }

  
    public function validaEntrada(Request $request){

        $datos = DB::select("select * from usuario where usuario=? and password=?", [$request->usuario,$request->password]);

        //var_dump($datos);

        //El isset solo valida que la variable sea crea

        if(!empty($datos)){ //si datos es diferente a vacio es correcto
           return view('inicio',['entrar' => true]);
        } else{
            return view('login',['msg' => "Usuario o contraseña incorrecta"]);
        }

    }

}
