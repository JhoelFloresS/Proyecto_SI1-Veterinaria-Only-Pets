@extends('layouts.master')
@section('title', 'Home')

@section('css')
    <link rel="stylesheet" href="./css/home.css">
    @section('css-derecha')
    @show
@endsection

@section('principal')
    <div class="encabezado">
        <form action="{{ route('logout') }}" method="post">
            @csrf
            <button class="cerrarSesion" type="submit">Cerrar Sesión</button>
            {{-- <a class="cerrarSesion" type ="submit">Cerrar Sesion</a> --}}
        </form>
    </div>

    <div class="separacion">
        <div class="contenidoIzquierda">
            <div class="fotoPerfil">
            </div>
            <div class="separacion"></div>
            <a href="/inicio">Inicio</a>
            <div class="separacion"></div>
            <a href="/usuario">Usuario</a>
            <div class="separacion"></div>
            <a href="/registrar-datos">Registrar Datos</a>
            <div class="separacion"></div>
            <a href="/historial-clinico">Historial Clinico</a>
            <div class="separacion"></div>
            <a href="/servicio">Servicio</a>
            <div class="separacion"></div>
            <a href="/pet-shop">Pet Shop</a>
            <div class="separacion"></div>
            <a href="/exportar-datos">Exportar Datos</a>
            <div class="separacion"></div>
        </div>
        <div class="contenidoDerecha">
            @section('contenido-derecha')
            @show
        </div>
    </div>
@endsection
