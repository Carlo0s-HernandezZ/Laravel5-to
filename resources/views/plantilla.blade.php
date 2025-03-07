<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElDiabloooooooo</title>
</head>
<body style="background-color: bisque;">
      

    <li><a href="{{route('inicio')}}">Inicio</a></li>
    <!-- Se usa el inicio se sesion generado por larvel, y reemplazamos el  que fue creado por mí -->
    @auth    
    <li><a href="{{route('empleado')}}">Empleado</a></li>
    <li><a href="{{route('cliente')}}">Cliente</a></li>
    <li><a href="{{route('producto')}}">Producto</a></li>
    <li><a href="{{route('usuario')}}">Usuario</a></li>
    @endauth

    <!-- mismo caso de la linea 13 XD -->
    @auth
    <form action="/logout" method="post">
    @csrf
    <input type="submit" value="Cerrar sesión">
    </form>
    
    @else
    <li><a href="{{route('login')}}">Inicio de sesión</a></li>
    @endauth
<!-- 
    <form action="{{ url('logout') }}" method="POST">
                                @csrf
                                <button type="submit"> Logout </button>
                            </form> -->

    </ul>

    @yield('contenido')
    
</body>
</html>