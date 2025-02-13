<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;

class controlProducto extends Controller{

    public function vistaProductos(Request $request){

        $datos = DB::select("select * from productos");
        return view('producto',["datos"=>$datos]);

    }//Cierre de la clase vistaProducto


    public function vistaProductoGuardar(){
        return view('producto_guardar');
    }//Cierre de vista usario

    public function ProductoGuardar(Request $request){

        $respuesta = DB::insert("insert into productos(nombre,costo,stock,descripcion) values(?,?,?,?)", 
        [
            $request->nombre,
            $request->costo,
            $request->stock,
            $request->descripcion

        ]);

        if($respuesta){
            $datos = DB::select("select * from productos");

            return view('producto',['datos'=>$datos]);

            }else {
                    return view('producto_guardar');
        }
    }//Cierre de Producto Guardar

}