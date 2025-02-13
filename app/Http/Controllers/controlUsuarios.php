<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;


 class controlUsuarios extends Controller{

    public function vistaUsuario(Request $request){
        
        $datos = DB::select("select * from usuario");
    
        return view('usuario',["datos"=>$datos]);
    
        }//Cierre de la clases vistaUsuario

        public function vistaUsuarioGuardar(){
            return view('usuarios_guardar');
        }//Cierre de vista usuario

    public function UsuarioGuardar(Request $request){

        $respuesta = DB::insert("insert into usuario(usuario,password,tipo) values(?,?,?)", [
            $request->usuario,
            $request->password,
            $request->tipo
        ]);

        if($respuesta){

                $datos = DB::select("select * from usuario");

            return view('usuario',['datos'=>$datos]);
        }
        else{
            return view('usuarios_guardar');
        }

       
}//Cierre de Guardar


public function usuarioEliminar($id){

    
    
    $resultado = DB::delete('delete from usuario where id_user = ?', [$id]);
    if($resultado){

        return view("mensajes", ["msg"=>"El Diablooooooooooo loco lo has eliminado"]);

    }else{

        return view("usuarios");

    }


}//Cierre de eliminar



public function usuarioModificar(Request $request,$id){

    $resultado = DB::update("update usuario set usuario=?,password=?, tipo=? where id_user=?", 
    [$request->usuario, $request->password, $request->tipo, $id]);

    if($resultado){
        return view("mensajes", ["msg"=>"El Diablooooooooooo loco lo has modificado"]);

    }else{
        $datos = DB::select('select * from usuario  where id_user=?',[$id]);
        return view('usuario_modificar',['datos'=>$datos[0],'msg'=>'No se cambio ningun campo']);
    }

}//Cierre de la funcion usuario modificar

public function vistaUsuarioModificar($id){

    $datos=DB::select("select * from usuario where id_user=?",[$id]);


   return view("usuario_modificar",["datos"=> $datos[0]]);

   

}//Cierre vistausuModificar


}//Close of class dad
