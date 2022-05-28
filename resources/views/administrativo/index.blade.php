@extends('home')
@section('title', 'Administrativos')

@section('registrar-datos','active')

@section('css-derecha')
<link rel="stylesheet" href="{{asset('css/table-information.css')}}">
@endsection

@section('contenido')
<div class="registrar">
  <a href="{{'/administrativos/create'}}" class="buttonRegistrame">
    Registrar <br>Administrativo
  </a>
</div>

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
      <th>Sexo</th>
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
      <td>{{$admin->persona->sexo}}</td>
      <td><a href="{{route('administrativos.edit', $admin)}}" class="button-edit">
          <span class="material-icons-sharp">
            edit
          </span>
        </a></td>
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