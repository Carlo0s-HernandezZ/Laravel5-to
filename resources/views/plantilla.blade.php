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
    <li><a href="{{route('empleado')}}">Empleado</a></li>
    <li><a href="{{route('cliente')}}">Cliente</a></li>
    <li><a href="{{route('producto')}}">Producto</a></li>
    <li><a href="{{route('usuario')}}">Usuario</a></li>

    </ul>

    @yield('contenido')
    
</body>
</html>