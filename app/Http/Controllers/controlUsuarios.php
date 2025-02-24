<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Return_;


 class controlUsuarios extends Controller{

    public function vistaUsuario(Request $request){
        
        $usuario = DB::select("select * from usuario");
    
        return view('usuario',["datos"=>$usuario]);

/*         return response()->json([

            'usuario'=>$usuario

        ]); */
    
        }//Cierre de la clases vistaUsuario

        public function vistaUsuarioGuardar(){
            return view('usuarios_guardar');
        }//Cierre de vista usuario

     public function UsuarioGuardar(Request $request){



       $file = $request->file('img');
        $nombre_imagen =$file->getClientOriginalName();
        $nombre_caperta="img/";
     
        $imgurl="http://localhost:8000/".$nombre_caperta.$nombre_imagen;
        $almacenar =$request->file('img')->move($nombre_caperta,$nombre_imagen);


        //Llena la variable con la URL de la imagen que se guarda en la carpeta IMG
        //$imgurl= "http://localhost:8000/storage/app/public/".$nombre_caperta.$nombre_imagen;

        //Esta linea se encarga de guardar la imagen en la carpeta IMG
        //$almacenar = $file->storeAs($nombre_caperta, $nombre_imagen, 'public');

        $respuesta = DB::insert("insert into usuario(usuario,password,tipo,imgurl) values(?,?,?,?)", [
            $request->usuario,
            $request->password,
            $request->tipo,
            $imgurl
        ]);

        if($respuesta){

                $datos = DB::select("select * from usuario");

            return view('usuario',['datos'=>$datos]);
        }
        else{
            return view('usuarios_guardar');
        }

       
}//Cierre de Guardar 

/*public function UsuarioGuardar(Request $request)
{
    // Validación de los datos
    $request->validate([
        'usuario' => 'required|string|max:255',
        'password' => 'required|string|min:6',
        'tipo' => 'required|string',
        'img' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    // Obtener la imagen
    $file = $request->file('img');
    $nombre_imagen = time() . '_' . $file->getClientOriginalName(); // Evita nombres repetidos
    $ruta_imagen = $file->storeAs('img', $nombre_imagen, 'public');

    // Generar la URL correcta
    $imgurl = asset('storage/img/' . $nombre_imagen);

    // Insertar en la base de datos
    $respuesta = DB::insert("INSERT INTO usuario(usuario, password, tipo, imgurl) VALUES(?, ?, ?, ?)", [
        $request->usuario,
        bcrypt($request->password), // Encripta la contraseña
        $request->tipo,
        $imgurl
    ]);

    if ($respuesta) {
        $datos = DB::select("SELECT * FROM usuario");
        return view('usuario', ['datos' => $datos]);
    } else {
        return view('usuarios_guardar');
    }
}//Codigo de referencia 
*/

public function usuarioEliminar($id){

    
    $datos = DB::select('select imgurl from usuario  where  id_usuario=?',[$id]);

    /* var_dump($datos);  /* para ver que esta retornando  se esta recibiendo o no informacion*/

    $cadena = explode("/", $datos[0]->imgurl);  //Se para por el caracter que se elija en este caso /
        /*http://localhost:8000/img/771365_1280_1024.jpg*/

    $resultado = DB::delete('delete from usuario where id_user = ?', [$id]);
    if($resultado){

        unlink(public_path("img/".$cadena[4])); //Elimina fisicamenta el archivo de la carpeta 

        return view("mensajes", ["msg"=>"El Diablooooooooooo loco lo has eliminado"]);

    }else{

        return view("usuarios");

    }


}//Cierre de eliminar



public function usuarioModificar(Request $request,$id){

    $file = $request->file('img');
    //var_dump($file);
    
    $nombre_imagen =$file->getClientOriginalName();
    $nombre_caperta="img/";
 
    $imgurl="http://localhost:8000/".$nombre_caperta.$nombre_imagen;
    $almacenar =$request->file('img')->move($nombre_caperta,$nombre_imagen);


    $resultado = DB::update("update usuario set usuario=?,password=?, tipo=?, imgurl=? where id_user=?", 
    [$request->usuario, $request->password, $request->tipo, $imgurl, $id]);

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
