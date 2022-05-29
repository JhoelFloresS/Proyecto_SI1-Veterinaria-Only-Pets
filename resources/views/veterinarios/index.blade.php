@extends('home')
@section('title', 'Veterinarios')

@section('registrar-datos','active')
@section('css-derecha')

<link rel="stylesheet" href="{{asset('css/table-information.css')}}">

@endsection

@section('contenido')
<div class="crud">
    <div class="registrar">
        <button class="buttonRegistrame"   data-bs-toggle="modal"
        data-bs-target="#VeterinarioFormInput">
            Registrar <br>Veterinario
        </button>
    </div>
    <div class="tabla-contenedor">
        <table class="tabla">
            <thead class="thead">
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Ci</th>
                    <th>Profesion</th>
                    <th>Email</th>
                    <th>Servicio</th>
                    <th>Sexo</th>
                    <th>Servicio</th>
                    <th>Editar</th>
                    <th>Ver</th>
                </tr>
            </thead>
            <tbody class="tbody">
                @foreach($veterinarios as $veterinario)
                <tr>
                    <td>{{$veterinario->id}}</td>
                    <td>{{$veterinario->persona->nombre}}</td>
                    <td>{{$veterinario->persona->apellido_paterno}}</td>
                    <td>{{$veterinario->persona->apellido_materno}}</td>
                    <td>{{$veterinario->persona->ci}}</td>
                    <td>{{$veterinario->profesion}}</td>
                    <td>{{$veterinario->persona->email}}</td>
                    <td>{{$veterinario->servicio->nombre??''}}</td>
                    <td>{{$veterinario->persona->sexo}}</td>
                    <td><a href="/veterinario/editar" class="button-edit" id="editar">
                            <span class="material-icons-sharp">
                                edit
                            </span>
                        </a></td>
                    <td><a class="button-edit" id="ver">
                            <span class="material-icons-sharp">
                                visibility
                            </span>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('body-final')
<x-forms.input-datos id="VeterinarioFormInput" type="veterinario" />
@endsection