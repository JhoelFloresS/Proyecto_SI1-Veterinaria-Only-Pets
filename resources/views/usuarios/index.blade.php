@extends('home')
@section('title', 'Usuarios')
@section('usuario','active')
@section('css-derecha')
<link rel="stylesheet" href="{{asset('css/table-information.css')}}">
@endsection
@section('contenido')


<div class="registrar">
  <a href="{{'/administrativos/create'}}" class="buttonRegistrame">
    Registrar <br>Usuario
  </a>
</div>
<div class="d-md-flex justify-content-md-end" style="margin-bottom: 1rem;">
  <form action="{{ route('usuarios.index')}}" method="GET">
    <div class="btn-group">
      <input type=" text" name="busqueda" class="form-control">
      <input type="submit" value="Buscar" class="btn btn-primary" style="background-color: var(--color-danger);">
    </div>
  </form>
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
          <a href=" {{route('usuarios.edit', $usuario)}}" class="button-edit">
            <span class="material-icons-sharp">
              edit
            </span>
          </a>
        </td>
        <td>
          <a href="{{route('usuarios.show', $usuario)}}" class="button-edit" id="ver">
            <span class="material-icons-sharp">
              visibility
            </span>
          </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<div class="pagination" style="margin-top: 1rem;">
  {{$usuarios->appends('busqueda=>$busqueda')}}
</div>


@endsection