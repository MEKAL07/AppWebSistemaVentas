<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sitema de Ventas</title>
    <!--meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"-->

    <link rel="stylesheet" href="{{asset('css/CssMenu.css')}}">
    <!--link rel="stylesheet" href="{{asset('css/icono.css')}}"-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/cssformularios.css')}}">

    <script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/prefixfree.min.js')}}"></script>
    <script src="{{asset('js/jsValidacion.js')}}"></script>
    
</head>
<body>
    <header>
        <div id="divMenu">
           <a href="#"><span class="icon-menu"></span>Menu</a>
       </div>
        <nav>
            <ul>
                <li>
                    <a href="{{url('/')}}"><span></span>Inicio</a>
                </li><li>
                    <a href="{{url('cliente/ver')}}"><span></span>Cliente</a>
                </li><li>    
                    <a href="{{url('usuario/ver')}}"><span></span>Usuario</a>
                </li><li>
                    <a href="{{url('producto/ver')}}"><span></span>Productos</a>
                </li><li>
                <li>
                    <a href="{{url('venta/ver')}}"><span></span>Ventas</a>
                </li><li>
                    <a href="#"><span></span>Reportes</a>
                </li>
                <li><a href="#"><span></span>Contáctanos</a></li>
            </ul>
        </nav>
    </header>
    <section id="sectionCuerpoGeneral">
        <div class="divForm">
            @yield('CuerpoInterno')
        </div>
        <div class="divFormVer">
            @yield('CuerpoInternoVer')
        </div>
    </section>
    <footer>pie pagina</footer>
</body>
</html>