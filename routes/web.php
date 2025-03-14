<?php

use App\Http\Controllers\controlUsuarios;
use App\Http\Controllers\ControlVistas;
use App\Http\Controllers\controlProducto;
use App\Http\Controllers\Loginautentificar;
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

/*Route::get('/Producto', [ControlVistas::class,"vistaProducto"] )->name("producto");*/
//El middleware es el metodo para evitar que se navege por medio de los links
Route::get('/cliente', [ControlVistas::class,"vistaCliente"] )->middleware(['evitarRetroceso','auth'])->name("cliente");
Route::get('/empleado', [ControlVistas::class,"vistaEpleado"] )->middleware(['evitarRetroceso','auth'])->name("empleado");
Route::get('/', [ControlVistas::class,"vistaInicio"] )->middleware(['evitarRetroceso','auth'])->name("inicio");


//Rutas para el crud para lo relacionado con usuarios.
Route::get('/usuario', [controlUsuarios::class,"vistaUsuario"] )->middleware(['evitarRetroceso','auth'])->name("usuario");
Route::get('/usuariosformGuardar', [controlUsuarios::class,"vistaUsuarioGuardar"] )->middleware(['evitarRetroceso','auth'])->name("usuformGuardar");
Route::post('/UsuariosGuardar', [ControlUsuarios::class,"UsuarioGuardar"])->middleware(['evitarRetroceso','auth'])->name("guardarUsu");
Route::get('/usuario_Eliminar/{id}', [ControlUsuarios::class,"usuarioEliminar"])->middleware(['evitarRetroceso','auth'])->name("eliminarUsu");
Route::get('/usuarioformModificar/{id}',[controlUsuarios::class, "vistaUsuarioModificar"])->middleware(['evitarRetroceso','auth'])->name("usuformModificar");
Route::post('/usuariomodificar/{id}',[controlUsuarios::class, "usuarioModificar"])->middleware(['evitarRetroceso','auth'])->name("modificarUsu");

//Rutas para el crud para lo relacionado con los productos
Route::get('/producto', [controlProducto::class,"vistaProductos"] )->middleware(['evitarRetroceso','auth'])->name("producto");
Route::post('/ProductoGuardar',[controlProducto::class, "ProductoGuardar"])->middleware(['evitarRetroceso','auth'])->name("guardarProdu");
Route::get('/productosformGuardar',[controlProducto::class,"vistaProductoGuardar"])->middleware(['evitarRetroceso','auth'])->name("usuformGuardarP");
Route::get('/producto_Eliminar/{id}',[controlProducto::class,"productoEliminar"])->middleware(['evitarRetroceso','auth'])->name("eliminarProduct");
Route::post('/productoModificar/{id}',[controlProducto::class,'productoModificar'])->middleware(['evitarRetroceso','auth'])->name(name: 'moficarProduct');
Route::get('/productoformModifcar/{id}',[controlProducto::class,"vistaProductoModificar"])->middleware(['evitarRetroceso','auth'])->name("productformModificar");

/* Route::get('/iniciosesion', [Loginautentificar::class, 'vistaLogin'])->name('iniciosesion');
Route::post('/validaentrada',[Loginautentificar::class, 'validaEntrada'])->name('validaentrada'); */
//Fail uerf56gf4t

// Login
Route::get('/login', [Loginautentificar::class, 'login'])->name('login');
Route::post('/login', [Loginautentificar::class, 'authenticate'])->name('auth.authenticate');

// Register
Route::get('/register', [Loginautentificar::class, 'register'])->name('auth.register');
Route::post('/register', [Loginautentificar::class, 'store'])->name('auth.store');

// Logout
Route::post('/logout', [Loginautentificar::class, 'logout'])->name('auth.logout');