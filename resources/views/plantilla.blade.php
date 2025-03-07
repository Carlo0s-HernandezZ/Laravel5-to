<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/signin.css') }}" rel="stylesheet">
  </head>
  <body class="text-center">


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