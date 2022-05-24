
@extends('layouts.master')
@section('title', 'Home')


@section('head')

    <!-- CSS only -->
    <!-- Material CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Home</title>
    @section('css-derecha')
    @show
@endsection

<body>
    <div class="container">
        <!-- Panel -->
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="/images/home/logo.png">
                    <h2>
                        <div class="texto-black">
                            <div class="letra-veterinaria">VETERINARIA</div>
                        </div><span class="danger"> ONLY PET'S</span>
                    </h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="#">
                    <span class="material-icons-sharp">home</span>
                    <h3>Inicio</h3>
                </a>
                <a href="#"  class = @yield('usuario','')>
                    <span class="material-icons-sharp" >person</span>
                    <h3>Usuario</h3>
                </a>
                <a href="{{route('datos')}}" class = @yield('registrar-datos','') >
                    <span class="material-icons-sharp">app_registration</span>
                    <h3>Datos</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">description</span>
                    <h3>Historial Clinico</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">control_point</span>
                    <h3>Servicio</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">shopping_cart</span>
                    <h3>Pet Shop</h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">file_download</span>
                    <h3>Exportar Datos</h3>
                </a>
                <form action="{{route('logout')}}" method="post">
                    @csrf
                    <button type="submit">
                        <a>
                            <span class="material-icons-sharp">logout</span>
                            <h3>Cerrar Sesion</h3>
                        </a>
                    </button>   
                    
                </form>
            </div>
        </aside>
        <div class="derecha">
            <div class="top-panel">
                <button id="menu-btn">
                    <span class="material-icons-sharp">menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-icons-sharp active">light_mode</span>
                    <span class="material-icons-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Usuario</p>
                        <small class="text-muted">Admin</small>
                    </div>
                    <div class="profile-photo">
                        <img src="/images/home/profile-1.jpg">
                    </div>
                </div>
            </div>
            <div class="contenido">

                @section('contenido-derecha')

                @show
            </div>
        </div>
    </div>
    <script src="/js/home.js"></script>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>