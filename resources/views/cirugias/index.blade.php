@extends('home')
@section('title', 'Cirugias')

@section('historial-clinico', 'active')

@section('css-derecha')
    <link rel="stylesheet" href="{{ asset('css/table-information.css') }}">
    <style>
        #CirugiaFormUpdate .form-control,
        #CirugiaFormUpdate .form-select,
        #CirugiaFormUpdate .select2-selection{
            background-color: khaki !important;
        }
    </style>
@endsection

@section('contenido')

<div class="registrar">
    <button class="buttonRegistrame" data-bs-toggle="modal" data-bs-target="#CirugiaFormInput"
        onclick="createSelector('cirugia','input')">
        Registrar <br>Cirugia
    </button>
</div>

    <table class="tabla">
        <thead class="thead">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Editar</th>
                <th>Ver</th>
            </tr>
        </thead>
        <tbody class="tbody">
            @foreach ($cirugias as $cirugia)
                <tr>
                    <td>{{ $cirugia->id }}</td>
                    <td>{{ $cirugia->nombre }}</td>
                    <td>{{ $cirugia->tipo }}</td>
                    <td><button class="button-edit">
                        <span class="material-icons-sharp" onclick=@php
                        echo "\"imprimir(" . json_encode($cirugia->id) . ")\""; @endphp data-bs-toggle="modal"
                            data-bs-target="#CirugiaFormUpdate">
                            edit
                        </span>
                    </button></td>
                   <td><a href="#" class="button-edit" id="ver">
          <span class="material-icons-sharp">
            visibility
          </span>
        </a></td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection

@section('body-final')
<x-forms.input-datos-historial id="CirugiaFormInput" type="cirugia" />
<x-forms.update-datos-historial id="CirugiaFormUpdate" type="cirugia" />
@endsection

@section('js-home')

    <script>
        //EVENTO ONCLICK PARA EL BOTON DE EDITAR
        function imprimir(id) {
            var cirugia = new XMLHttpRequest()
            cirugia.open("GET","/cirugias/datas/" + id.toString(), true)
            cirugia.addEventListener("load", cargarDatos)
            cirugia.send()
        }

        function cargarDatos(e) {
            const datos = JSON.parse(this.responseText)
           // console.log(datos)
            $("#CirugiaFormUpdate #nombre").attr("value", datos.nombre)
            $("#CirugiaFormUpdate #tipo").attr("value", datos.tipo)

            let action = "/cirugias/" + datos.id

            $('#CirugiaFormUpdate form').attr('action', action)
        }   
        
    </script>
@endsection