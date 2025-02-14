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

    public function productoEliminar($id){

        $resultado = DB::delete('delete from productos where id = ?',[$id]);
        if($resultado){
            return view("mensajes", ["msg"=>"El registro ha sido eliminado"]);

        }else{
            return view("producto");
        }

    }//Cerrado de productoEliminar

    public function productoModificar(Request $request,$id){
        $resultado= DB::update("update productos set nombre=?, costo=?, stock=?, descripcion=? where id=?",
        [$request->nombre, 
                    $request->costo, 
                    $request->stock, 
                    $request->descripcion, 
                    $id]);

        if($resultado){
            return view("mensajes", ["msg"=>"Se hara una modificacion de un registro"]);
        }else{
            $datos = DB::select('select * from productos where id=?',[$id]);
            return view('producto_modificar', ['datos'=>$datos[0],'msg'=>'No se a realizado ninguna modificacion']);
        }
    }//Cerrado de productoModifcar


        public function vistaProductoModificar($id){
            $datos=DB::select('select * from productos where id=?',[$id]);

            return view('producto_modificar', ['datos'=> $datos[0]]);
        }

}