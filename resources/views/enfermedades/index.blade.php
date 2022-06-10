@extends('home')
@section('title', 'Enfermedades')

@section('historial-clinico', 'active')

@section('css-derecha')
<link rel="stylesheet" href="{{ asset('css/table-information.css') }}">
<style>
    #EnfermedadFormUpdate .form-control,
    #EnfermedadFormUpdate .form-select,
    #EnfermedadFormUpdate .select2-selection {
        background-color: khaki !important;
    }
</style>
@endsection

@section('contenido')

<div class="registrar">
    <button class="buttonRegistrame" data-bs-toggle="modal" data-bs-target="#EnfermedadFormInput"
        onclick="createSelector('enfermedad','input')">
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
                <span class="material-icons-sharp" onclick=@php
                echo "\"imprimir(" . json_encode($enfermedad->id) . ")\""; @endphp data-bs-toggle="modal"
                    data-bs-target="#EnfermedadFormUpdate">
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
<x-forms.input-datos-historial id="EnfermedadFormInput" type="enfermedad" />
<x-forms.update-datos-historial id="EnfermedadFormUpdate" type="enfermedad" />
@endsection

@section('js-home')

    <script>
        //EVENTO ONCLICK PARA EL BOTON DE EDITAR
        function imprimir(id) {
            var enfermedad = new XMLHttpRequest()
            enfermedad.open("GET","/enfermedades/datas/" + id.toString(), true)
            enfermedad.addEventListener("load", cargarDatos)
            enfermedad.send()
        }

        function cargarDatos(e) {
            const datos = JSON.parse(this.responseText)
           // console.log(datos)
            $("#EnfermedadFormUpdate #nombre").attr("value", datos.nombre)
            $("#EnfermedadFormUpdate #tipo").attr("value", datos.tipo)

            let action = "/enfermedades/" + datos.id

            $('#EnfermedadFormUpdate form').attr('action', action)
        }   
        
    </script>
@endsection
