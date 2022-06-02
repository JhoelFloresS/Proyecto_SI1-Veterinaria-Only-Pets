@extends('home')
@section('title', 'Cirugias')

@section('historial-clinico', 'active')

@section('css-derecha')
    <link rel="stylesheet" href="{{ asset('css/table-information.css') }}">
    <style>
        #AdministrativoFormUpdate .form-control,
        #AdministrativoFormUpdate .form-select,
        #AdministrativoFormUpdate .select2-selection{
            background-color: khaki !important;
        }
    </style>
@endsection

@section('contenido')

    <div class="registrar">
        <button class="buttonRegistrame" data-bs-toggle="modal">
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
                            <span class="material-icons-sharp">
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
    <x-forms.input-datos id="AdministrativoFormInput" type="administrativo" />
    <x-forms.update-datos id="AdministrativoFormUpdate" type="administrativo" />
@endsection
