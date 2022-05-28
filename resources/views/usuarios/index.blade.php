@extends('home')
@section('title', 'Usuarios')
@section('registrar-datos','active')
@section('css-derecha')
<link rel="stylesheet" href="{{asset('css/table-information.css')}}">
@endsection
@section('contenido')

  
  <div class="registrar">
    <a href="{{'/administrativos/create'}}" class="buttonRegistrame">
      Registrar <br>Usuario
    </a>
  </div>
  <div class="tabla-contenedor">
    <table class="tabla">
      <thead class="thead">
        <tr>
          <th>Id</th>
          <th>Usuare Name</th>
          <th>Estado</th>
          <th>Editar</th>
          <th>Ver</th>
        </tr>
      </thead>
      <tbody class="tbody">
        @foreach($usuarios as $usuario)
        <tr>
          <td>{{$usuario->id}}</td>
          <td>{{$usuario->nombre_usuario}}</td>
          <td>{{$usuario->enable}}</td>
          <td>
            <a href="{{route('usuarios.edit', $usuario)}}" class="button-edit">
              <span class="text">Editar</span>
            </a>
          </td>
        <td>
            <a href="#" class="button-edit" id="ver">
            <span class="text">Ver</span>
            </a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection