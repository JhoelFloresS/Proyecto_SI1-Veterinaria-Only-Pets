@extends('home')
@section('title', 'Historial-Clinico')

@section('historial-clinico', 'active')

@section('css-derecha')
    <link rel="stylesheet" href="{{ asset('css/table-information.css') }}">
    <style>
        #HistorialFormUpdate .form-control,
        #HistorialFormUpdate .form-select,
        #HistorialFormUpdate .select2-selection {
            background-color: khaki !important;
        }
    </style>
@endsection

@section('contenido')

    @can('historiales.index')
        <div class="registrar">
            <button class="buttonRegistrame" data-bs-toggle="modal" data-bs-target="#HistorialFormInput"
                onclick="createSelector('historial','input')">
                Registrar <br>Historial Clinico
            </button>
        </div>
    @endcan

    <table class="tabla">
        <thead class="thead">
            <tr>
                <th>Id</th>
                <th>Mascota</th>
                <th>Peso</th>
                <th>Talla</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="tbody">
            @foreach ($historiales as $historial)
                <tr>
                    <td>{{ $historial->id }}</td>
                    <td>{{ $historial->mascota->nombre }}</td>
                    <td>{{ $historial->peso }}</td>
                    <td>{{ $historial->talla }}</td>
                    <td>
                        <div class="d-flex flex-row justify-content-between">
                        @can('historiales.edit')
                        <button class="button-edit">
                            <span class="material-icons-sharp">
                                edit
                            </span>
                        </button>
                        @endcan
                        <a href="{{ route('historiales.show', $historial) }}" class="button-edit" id="ver">
                            <span class="material-icons-sharp">
                                visibility
                            </span>
                        </a>
                    </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection

@section('body-final')
    <x-forms.input-datos-historial id="HistorialFormInput" type="historial" />
    <x-forms.update-datos-historial id="HistorialFormUpdate" type="historial" />
@endsection
