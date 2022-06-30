@extends('home')
@section('title', 'Solicitudes')

@section('servicio','active')

@section('css-derecha')
<link rel="stylesheet" href="{{asset('css/table-information.css')}}">

  <style>
    #solicitudesFormUpdate .form-control,
    #solicitudesFormUpdate .form-select,
    #solicitudesFormUpdate .select2-selection {
        background-color: khaki !important;
    }

  </style>
@endsection

@section('contenido')

<div class="crud">

  <div class="registrar">
    <button href="{{'/administrativos/create'}}" class="buttonRegistrame" data-bs-toggle="modal"
    data-bs-target="#solicitudesFormInput" onclick="createSelector('Input')">
      Registrar <br>Solicitud De Servicio
    </button>
  </div>
  <div class="d-md-flex justify-content-md-end" style="margin-bottom: 1rem;">
    <form action="{{ route('solicitudes.index')}}" method="GET">
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
          <th>Nombre de cliente</th>
          <th>Nombre de mascota</th>
          <th>Nombre de servicio</th>
          <th>Id de recibo</th>
          <th>Editar</th>
          <th>Ver</th>
        </tr>
      </thead>
      <tbody class="tbody">
        @foreach($solicitudes as $solicitud)
      <tr>
        <td>{{$solicitud->id}}</td>
        <td>{{$solicitud->cliente->persona->nombre}} 
          {{$solicitud->cliente->persona->apellido_paterno}} 
          {{$solicitud->cliente->persona->apellido_materno}}
        </td>
        <td>{{$solicitud->mascota->nombre}}</td>
        <td> @if($solicitud->id_servicio)
          {{$solicitud->servicio->nombre}}
          @else
            ninguno
        @endif 
        </td>
        <td>{{$solicitud->id_recibo}}</td>
        <td><button class="button-edit"
           onclick=@php
          echo "\"desplegarForm(" . json_encode($solicitud->id) . ")\""; @endphp data-bs-toggle="modal" data-bs-target="#solicitudesFormUpdate">
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
    {{$solicitudes->appends('busqueda=>$busqueda')}}
  </div>
</div>
@endsection
@section('body-final')
<x-solicitudes-input id="solicitudesFormInput"/>
<x-solicitudes-update id="solicitudesFormUpdate"/>
@endsection

@section('js-home')
  <script>
    const createSelector = (type) =>{  

      $('#formSolicitudesInput' + ' #servicios').select2({
          theme: 'bootstrap-5',
         // tags: true,
         // dropdownParent: $('#mascotasFormInput'),
          placeholder: 'Seleccione los servicios',
          maximumSelectionLength: 5,
          width: '100%'
      })
    }

    function desplegarForm(id) {
      var admin = new XMLHttpRequest()
      admin.open("GET", "/solicitudes/datas/" + id.toString(), true)
      admin.addEventListener("load", cargarDatos)
      admin.send()
  }

  function cargarDatos(e) {
      const datos = JSON.parse(this.responseText)

      createSelector('Update')
      //PARA EL CLIENTE
      $("#solicitudesFormUpdate #id_cliente option")[0].selected="true"
            if (datos.id_cliente) {
                const id_cliente = datos.id_cliente ?? null
                const id_clienteSelected = "#solicitudesFormUpdate #id_cliente " + "option[value=" + String(id_cliente) + "]"
                $("#solicitudesFormUpdate #id_cliente option").each((i,e)=>{
                    $(e).attr("selected", false)
                   // console.log(e)
                })
                $(id_clienteSelected).attr("selected", true)
            }

      //PARA LA MASCOTA
      $("#solicitudesFormUpdate #id_mascota option")[0].selected="true"
            if (datos.id_mascota) {
                const id_mascota = datos.id_mascota ?? null
                const id_mascotaSelected = "#solicitudesFormUpdate #id_mascota " + "option[value=" + String(id_mascota) + "]"
                $("#solicitudesFormUpdate #id_mascota option").each((i,e)=>{
                    $(e).attr("selected", false)
                   // console.log(e)
                })
                $(id_mascotaSelected).attr("selected", true)
            }     

       //PARA EL RECIBO
      $("#solicitudesFormUpdate #id_recibo option")[0].selected="true"
            if (datos.id_recibo) {
                const id_recibo = datos.id_recibo ?? null
                const id_reciboSelected = "#solicitudesFormUpdate #id_recibo " + "option[value=" + String(id_recibo) + "]"
                $("#solicitudesFormUpdate #id_recibo option").each((i,e)=>{
                    $(e).attr("selected", false)
                })
                $(id_reciboSelected).attr("selected", true)
            }
        
        //PARA LOS SERVICIOS
        $("#solicitudesFormUpdate #servicios option")[0].selected="true"
            if (datos.id_servicio) {
                const servicios = datos.id_servicio ?? null
                const serviciosSelected = "#solicitudesFormUpdate #servicios " + "option[value=" + String(servicios) + "]"
                $("#solicitudesFormUpdate #servicios option").each((i,e)=>{
                    $(e).attr("selected", false)
                })
                $(serviciosSelected).attr("selected", true)
            } 

      let action = "/solicitudes/" + datos.id

      $('#solicitudesFormUpdate form').attr('action', action)


  }
  </script>

@endsection