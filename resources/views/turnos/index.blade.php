@extends('home')
@section('title', 'Turnos')

@section('servicio','active')

@section('css-derecha')
<link rel="stylesheet" href="{{asset('css/table-information.css')}}">

  <style>
    #turnosFormUpdate .form-control,
    #turnosFormUpdate .form-select,
    #turnosFormUpdate .select2-selection {
        background-color: khaki !important;
    }

  </style>
@endsection

@section('contenido')

<div class="crud">

  <div class="registrar">
    <button href="{{'/administrativos/create'}}" class="buttonRegistrame" data-bs-toggle="modal"
    data-bs-target="#turnosFormInput" onclick="createSelector('Input')">
      Registrar <br>Turnos
    </button>
  </div>
  <div class="d-md-flex justify-content-md-end" style="margin-bottom: 1rem;">
    <form action="{{ route('turnos.index')}}" method="GET">
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
          <th>Horario de entrada</th>
          <th>Horario de salida</th>
          <th>Editar</th>
          <th>Ver</th>
        </tr>
      </thead>
      <tbody class="tbody">
        @foreach($turnos as $turno)
      <tr>
        <td>{{$turno->id}}</td>
        <td>{{$turno->horario_entrada}}</td>
        <td>{{$turno->horario_salida}}</td>
        <td><button class="button-edit"
           onclick=@php
          echo "\"desplegarForm(" . json_encode($turno->id) . ")\""; @endphp data-bs-toggle="modal" data-bs-target="#turnosFormUpdate">
          <span class="material-icons-sharp">
              edit   
          </span>
      </button></td>
        <td>
          <a href="#" class="button-edit" id="ver">
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
    {{$turnos->appends('busqueda=>$busqueda')}}
  </div>
</div>
@endsection
@section('body-final')
<x-forms.solicitudes-input id="solicitudesFormInput"/>
<x-forms.solicitudes-update id="solicitudesFormUpdate"/>
@endsection
