<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControlVistas extends Controller
{

    public function vistaProducto(){
        $usuario = "Andres";
        return view('producto',['usuario'=>$usuario]); 
    }//Cierre de la fucnion vistaProducto

    public function vistaEpleado(){

        $datos = [
            ["codigo" =>1,"nombre"=>"Andres","apellido"=>"FLores","puesto"=>"Gerente","sueldo"=>30000],
            ["codigo" =>2,"nombre"=>"Ana","apellido"=>"Rizo","puesto"=>"Supervisor","sueldo"=>10000],
            ["codigo" =>3,"nombre"=>"Angel","apellido"=>"Casas","puesto"=>"Vendedor","sueldo"=>8000],
            ["codigo" =>3,"nombre"=>"Brisa","apellido"=>"Jaimes","puesto"=>"CEO","sueldo"=>3000000]
        ];

        return view('empleado',["datos"=>$datos]); 
    }//Cierre de la fucnion vistaEpleado

    public function vistaCliente(){
        return view('cliente'); 
    }//Cierre de la fucnion vistaCliente

    public function vistaInicio(){
        return view('inicio'); 
    }//Cierre de la fucnion vistaEpleado




}//Cierre de la clase cotrolVista