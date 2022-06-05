@extends('home')
@section('title', 'Mascotas')

@section('registrar-datos','active')

@section('css-derecha')
<link rel="stylesheet" href="{{asset('css/table-information.css')}}">
@endsection

@section('contenido')

<div class="crud">

  <div class="registrar">
    <a href="{{'/administrativos/create'}}" class="buttonRegistrame">
      Registrar <br>Mascota
    </a>
  </div>
  <div class="d-md-flex justify-content-md-end" style="margin-bottom: 1rem;">
    <form action="{{ route('mascotas.index')}}" method="GET">
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
          <th>Especie</th>
          <th>raza</th>
          <th>sexo</th>
          <th>Nombre del dueño</th>
          <th>Editar</th>
          <th>Ver</th>
        </tr>
      </thead>
      <tbody class="tbody">
        @foreach($mascotas as $mascota)
        <tr>
          <td>{{$mascota->id}}</td>
          <td>{{$mascota->nombre}}</td>
          <td>{{$mascota->especie}}</td>
          <td>{{$mascota->raza}}</td>
          <td>{{$mascota->sexo}}</td>
          <td>{{$mascota->propietario[0]->nombre.' '.$mascota->propietario[0]->apellido_paterno.' '.$mascota->propietario[0]->apellido_materno}}</td>
          <td><a href="{{route('mascotas.edit', $mascota)}}" class="button-edit">
              <span class="material-icons-sharp">
                edit
              </span>
            </a></td>
          <td><a href="{{route('mascotas.show', $mascota)}}" class="button-edit" id="ver">
              <span class="material-icons-sharp">
                visibility
              </span>
            </a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="pagination" style="margin-top: 1rem;">
    {{$mascotas->appends('busqueda=>$busqueda')}}
  </div>
</div>
@endsection