@extends('home')
@section('title', 'Servicios')
@section('servicio','active')
@section('css-derecha')
<link rel="stylesheet" href="{{asset('css/table-information.css')}}">
@endsection
@section('contenido')


<div class="registrar">
  <a href="" class="buttonRegistrame">
    Registrar <br>Usuario
  </a>
</div>
<div class="d-md-flex justify-content-md-end" style="margin-bottom: 1rem;">
  <form action="{{ route('servicios.index')}}" method="GET">
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
        <th>Nombre</th>
        <th>Precio</th>
        <th>Editar</th>
        <th>Ver</th>
      </tr>
    </thead>
    <tbody class="tbody">
      @foreach($servicios as $servicio)
      <tr>
        <td>{{$servicio->id}}</td>
        <td>{{$servicio->nombre}}</td>
        <td>{{$servicio->precio}}</td>
        <td>
          <a href=" " class="button-edit">
            <span class="material-icons-sharp">
              edit
            </span>
          </a>
        </td>
        <td>
          <a href="{{route('servicios.show', $servicio)}}" class="button-edit" id="ver">
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
  {{$servicios->appends('busqueda=>$busqueda')}}
</div>


@endsection