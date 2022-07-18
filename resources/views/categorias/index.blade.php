@extends('home')
@section('title', 'categorias')
@section('petshop', 'active')
@section('css-derecha')
    <link rel="stylesheet" href="{{ asset('css/table-information.css') }}">
    <style> {
            background-color: khaki !important;
        }
    </style>
@endsection

@section('contenido')

<div class="crud">
    <div class="d-md-flex justify-content-md-between" style="margin-bottom: 1rem;">
        <form action="{{ route('categorias.index') }}" method="GET">
            <div class="btn-group">
                <input type=" text" name="busqueda" class="form-control">
                <input type="submit" value="Buscar" class="btn btn-primary"
                    style="background-color: var(--color-danger);">
            </div>
        </form>
    </div>
    <div class="tabla-contenedor">
        <table class="tabla">
            <thead class="thead">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody class="tbody">
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre }}</td>
                        <td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </div>
           <div class="pagination" style="margin-top: 1rem;">
               {{ $categorias->appends('busqueda=>$busqueda') }}
            </div>
</div>
@endsection