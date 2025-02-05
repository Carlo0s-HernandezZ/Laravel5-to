<?php

use App\Http\Controllers\controlUsuarios;
use App\Http\Controllers\ControlVistas;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('inicio');
})->name("inicio");

Route::get('/empleado', function () {
    return view('empleado');
})->name("empleado");

Route::get('/cliente', function () {
    return view('cliente');
})->name("cliente");

/*
Route::get('/Producto', function () {
    return view('producto');
})->name("producto");
*/

Route::get('/Producto', [ControlVistas::class,"vistaProducto"] )->name("producto");
Route::get('/cliente', [ControlVistas::class,"vistaCliente"] )->name("cliente");
Route::get('/empleado', [ControlVistas::class,"vistaEpleado"] )->name("empleado");
Route::get('/inicio', [ControlVistas::class,"vistaInicio"] )->name("inicio");


//Rutas para el crud para lo relacionado con usuarios.
Route::get('/usuario', [controlUsuarios::class,"vistaUsuario"] )->name("usuario");
Route::get('/usuariosformGuardar', [controlUsuarios::class,"vistaUsuarioGuardar"] )->name("usuformGuardar");
Route::post('/UsuariosGuardar', [ControlUsuarios::class,"UsuarioGuardar"])->name("guardarUsu");
Route::get('/usuario_Eliminar/{id}', [ControlUsuarios::class,"usuarioEliminar"])->name("eliminarUsu");
Route::get('/usuarioformModificar/{id}',[controlUsuarios::class, "vistaUsuarioModificar"])->name("usuformModificar");
Route::post('/usuariomodificar/{id}',[controlUsuarios::class, "usuarioModificar"])->name("modificarUsu");
