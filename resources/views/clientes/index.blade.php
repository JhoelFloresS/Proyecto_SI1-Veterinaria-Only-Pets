@extends('home')
@section('title', 'clientes')
@section('registrar-datos','active')
@section('css-derecha')
<link rel="stylesheet" href="{{asset('css/table-information.css')}}">
@endsection
@section('contenido')

<div class="crud">

  <div class="registrar">
    <button class="buttonRegistrame"   data-bs-toggle="modal"
    data-bs-target="#ClienteFormInput">
      Registrar <br>cliente
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
          <th>Direccion</th>
          <th>Email</th>
          <th>Fecha nacimiento</th>
          <th>Sexo</th>
          <th>Editar</th>
          <th>Ver</th>
        </tr>
      </thead>
      <tbody class="tbody">
        @foreach($clientes as $cliente)
        <tr>
          <td>{{$cliente->id}}</td>
          <td>{{$cliente->nombre}}</td>
          <td>{{$cliente->apellido_paterno}}</td>
          <td>{{$cliente->apellido_materno}}</td>
          <td>{{$cliente->ci}}</td>
          <td>{{$cliente->direccion}}</td>
          <td>{{$cliente->email}}</td>
          <td>{{$cliente->fecha_de_nacimiento}}</td>
          <td>{{$cliente->sexo}}</td>
          <td><a href="{{route('clientes.edit', $cliente)}}" class="button-edit">
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
  </div>
</div>
@endsection

@section('body-final')

<x-forms.input-datos id="ClienteFormInput" type="cliente" />    
@endsection