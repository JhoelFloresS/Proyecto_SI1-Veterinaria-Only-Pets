@extends('home')
@section('title', 'Administrativos')
@section('registrar-datos','active')
@section('css-derecha')
@endsection
<style>
    /*.crud {
    margin: 0 auto;
    justify-content:center;
    text-align:center;
  }*/

    /*.tabla-contenedor {
    margin: 0 auto;
    justify-content:center;
    text-align:center;
    justify-items: center;
  }*/

    * {
        font-size: 0.88rem;
    }


    .buttonRegistrame {
        display: block;
        margin-bottom: 15px;
        font-size: 0.9em;
        width: 140px;
        font-weight: bold;
        padding: 10px 20px;
        border-radius: 15px;
        box-shadow: 0px 0px 17px 2px rgba(72, 206, 24, 255);
        background-color: rgba(72, 206, 24, 255);
        text-align: center;
        color: white;
    }

    .registrar a {
        text-decoration: none;
        font-weight: bold;
    }

    .buttonRegistrame a:hover {
        cursor: pointer;
    }

    table {
        text-align: left;
        width: 100%;
        text-align: center;
    }

    .tabla-contenedor {
        display: block;
        padding: 1.2%;
        border-radius: 4px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        box-shadow: 2px 2px 10px rgb(0, 0, 0, 0.5);
    }


    .tbody {
        font-size: 17px;
        font-weight: bold 1px;
    }

    .thead {
        /*background-color: #1A1A1A;*/
        color: #363949;
    }

    .button-edit {
        display: block;
        font-size: 0.7em;
        width: 50px;
        margin: 0 auto;
        border-radius: 4px;
        box-shadow: 1px 1px 5px rgb(0, 0, 0, 0.5);
        background-color: rgba(72, 206, 24, 255);
        text-align: center;
        color: white;
    }

    .button-edit a:hover {
        cursor: pointer;
    }

    .tbody a {
        text-decoration: none;
        font-weight: bold;
    }
</style>
@section('contenido')

<div class="crud">
    <div class="registrar">
        <a href="{{'/veterinario/create'}}" class="buttonRegistrame">
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
                    <th>Email</th>
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
                    <td>{{$veterinario->persona->email}}</td>
                    <td>{{$veterinario->persona->sexo}}</td>
                    <td>Servicio</td>
       
                    <td><a href="/veterinario/editar" class="button-edit" id="editar">
                            <span class="text">Editar</span>
                        </a></td>
                    <td><a  class="button-edit" id="ver">
                            <span class="text">Ver</span>
                </tr>
                @endforeach
               
            </tbody>
        </table>
    </div>
</div>
@endsection