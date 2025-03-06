<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ElDiabloooooooo</title>
</head>
<body style="background-color: bisque;">
    
    <ul>

    <li><a href="{{route('inicio')}}">Inicio</a></li>
    @if (isset($entrar)&& $entrar == true)
    
    <li><a href="{{route('empleado')}}">Empleado</a></li>
    <li><a href="{{route('cliente')}}">Cliente</a></li>
    <li><a href="{{route('producto')}}">Producto</a></li>
    <li><a href="{{route('usuario')}}">Usuario</a></li>
    @endif


    @if (isset($entrar)&& $entrar == true)
    <li><a href="">Cerrar de sesión</a></li>
    @else
    <li><a href="{{route('login')}}">Inicio de sesión</a></li>
    @endif

    <form action="{{ url('logout') }}" method="POST">
                                @csrf
                                <button type="submit"> Logout </button>
                            </form>

    </ul>

    @yield('contenido')
    
</body>
</html>