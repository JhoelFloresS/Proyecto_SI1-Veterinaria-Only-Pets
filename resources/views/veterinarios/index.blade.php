@extends('home')
@section('title', 'Veterinarios')

@section('registrar-datos','active')
@section('css-derecha')

<link rel="stylesheet" href="{{asset('css/table-information.css')}}">

@endsection

@section('contenido')
<div class="crud">
    <div class="registrar">
        <a href="{{'/veterinarios/create'}}" class="buttonRegistrame">
            Registrar <br>Veterinario
        </a>
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
                @foreach($admins as $admin)
                <tr>
                    <td>{{$admin->id}}</td>
                    <td>{{$admin->persona->nombre}}</td>
                    <td>{{$admin->persona->apellido_paterno}}</td>
                    <td>{{$admin->persona->apellido_materno}}</td>
                    <td>{{$admin->persona->ci}}</td>
                    <td>{{$admin->profesion}}</td>
                    <td>{{$admin->persona->email}}</td>
                    <td>{{$admin->servicio->nombre}}</td>
                    <td>{{$admin->persona->sexo}}</td>
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