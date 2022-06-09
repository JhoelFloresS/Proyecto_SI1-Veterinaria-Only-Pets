@extends('home')
@section('title', 'Vacunas')

@section('historial-clinico', 'active')

@section('css-derecha')
    <link rel="stylesheet" href="{{ asset('css/table-information.css') }}">
    <style>
        #VacunaFormUpdate .form-control,
        #VacunaFormUpdate .form-select,
        #VacunaFormUpdate .select2-selection{
            background-color: khaki !important;
        }
    </style>
@endsection

@section('contenido')

<div class="registrar">
    <button class="buttonRegistrame" data-bs-toggle="modal" data-bs-target="#VacunaFormInput"
        onclick="createSelector('vacuna','input')">
        Registrar <br>Vacuna
    </button>
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
            @foreach ($vacunas as $vacuna)
                <tr>
                    <td>{{ $vacuna->id }}</td>
                    <td>{{ $vacuna->nombre }}</td>
                    <td><button class="button-edit">
                        <span class="material-icons-sharp" onclick=@php
                        echo "\"imprimir(" . json_encode($vacuna->id) . ")\""; @endphp data-bs-toggle="modal"
                            data-bs-target="#VacunaFormUpdate">
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
    <x-forms.input-datos-historial id="VacunaFormInput" type="vacuna" />
    <x-forms.update-datos-historial id="VacunaFormUpdate" type="vacuna" />
@endsection


@section('js-home')

    <script>
        //EVENTO ONCLICK PARA EL BOTON DE EDITAR
        function imprimir(id) {
            var vacuna = new XMLHttpRequest()
            vacuna.open("GET","/vacunas/datas/" + id.toString(), true)
            vacuna.addEventListener("load", cargarDatos)
            vacuna.send()
        }

        function cargarDatos(e) {
            const datos = JSON.parse(this.responseText)
           // console.log(datos)
            $("#VacunaFormUpdate #nombre").attr("value", datos.nombre)
            $("#VacunaFormUpdate #tipo").attr("value", datos.tipo)

            let action = "/vacunas/" + datos.id

            $('#VacunaFormUpdate form').attr('action', action)
        }   
        
    </script>
@endsection