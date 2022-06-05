@extends('home')
@section('title', 'Enfermedades')

@section('historial-clinico', 'active')

@section('css-derecha')
<link rel="stylesheet" href="{{ asset('css/table-information.css') }}">
<style>
    #AdministrativoFormUpdate .form-control,
    #AdministrativoFormUpdate .form-select,
    #AdministrativoFormUpdate .select2-selection {
        background-color: khaki !important;
    }
</style>
@endsection

@section('contenido')

<div class="registrar">
    <button class="buttonRegistrame" data-bs-toggle="modal">
        Registrar <br>Enfermedad
    </button>
</div>
<div class="d-md-flex justify-content-md-end" style="margin-bottom: 1rem;">
    <form action="{{ route('enfermedades.index')}}" method="GET">
        <div class="btn-group">
            <input type=" text" name="busqueda" class="form-control">
            <input type="submit" value="Buscar" class="btn btn-primary" style="background-color: var(--color-danger);">
        </div>
    </form>
</div>
<table class="tabla">
    <thead class="thead">
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Editar</th>
            <th>Ver</th>
        </tr>
    </thead>
    <tbody class="tbody">
        @foreach ($enfermedades as $enfermedad)
        <tr>
            <td>{{ $enfermedad->id }}</td>
            <td>{{ $enfermedad->nombre }}</td>
            <td><button class="button-edit">
                    <span class="material-icons-sharp">
                        edit
                    </span>
                </button></td>
            <td><a href="{{route('enfermedades.show',$enfermedad->id)}}" class="button-edit" id="ver">
                    <span class="material-icons-sharp">
                        visibility
                    </span>
                </a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="pagination" style="margin-top: 1rem;">
    {{$enfermedades->appends('busqueda=>$busqueda')}}
</div>


@endsection

@section('body-final')
<x-forms.input-datos id="AdministrativoFormInput" type="administrativo" />
<x-forms.update-datos id="AdministrativoFormUpdate" type="administrativo" />
@endsection