@extends('home')
@section('title', 'Servicios')
@section('bitacoras', 'active')
@section('css-derecha')
    <link rel="stylesheet" href="{{ asset('css/table-information.css') }}">
@endsection
@section('contenido')

    @php
    //if filtro is defined
    if (isset($_GET['filtro'])) {
        $filtro = $_GET['filtro'];
    } else {
        $filtro = '';
    }
    if (isset($_GET['busqueda'])) {
        $busqueda = $_GET['busqueda'];
    } else {
        $busqueda = '';
    }

    @endphp


    <form action="{{ route('bitacoras.index') }}" method="GET">

        <div class="d-md-flex flex-row justify-content-md-between" style="margin-bottom: 1rem;">
     
            <div class="input-group mb-3">
                <label class="input-group-text" for="filtro" style="background-color: var(--color-danger);">Filtrar por:</label>
                <select id="filtro" name="filtro" class="form-select">
                    <option value="" selected>Todos</option>
                    <option value="usuario" @php
                        if (isset($_GET['filtro']) && $_GET['filtro'] == 'usuario') {
                            echo 'selected';
                        }
                    @endphp>Usuario</option>
                    <option value="accion" @php
                        if (isset($_GET['filtro']) && $_GET['filtro'] == 'accion') {
                            echo 'selected';
                        }
                    @endphp>Accion</option>
                    <option value="descripcion" @php
                        if (isset($_GET['filtro']) && $_GET['filtro'] == 'descripcion') {
                            echo 'selected';
                        }
                    @endphp>Descripción</option>
                </select>
                
                <input type="submit" value="Buscar" class="btn btn-primary" style="background-color: var(--color-danger);">
                <input type=" text" name="busqueda" class="form-control" id="busqueda" value="{{ $busqueda }}">
            </div>

        </div>
    </form>

    <div class="tabla-contenedor">
        <table class="tabla">
            <thead class="thead">
                <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Accion</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                </tr>
            </thead>
            <tbody class="tbody">
                @foreach ($acciones as $accion)
                    <tr>
                        <td>{{ $accion->id }}</td>
                        @php
                            $persona = $accion->bitacora->usuario->persona;
                        @endphp
                        <td>{{ $persona->nombre . ' ' . $persona->apellido_paterno . ' ' . $persona->apellido_materno }}
                        </td>
                        <td>{{ $accion->accion }}</td>
                        <td>{{ $accion->descripcion }}</td>
                        <td>{{ $accion->fecha }}</td>
                        <td>{{ $accion->hora }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pagination" style="margin-top: 1rem;">
        {{ $acciones->appends('filtro', $filtro)->appends('busqueda', $busqueda)->links() }}
    </div>


@endsection
