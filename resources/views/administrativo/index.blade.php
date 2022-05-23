@section('title', 'Administrativos')
@extends('home')

@section('css-derecha')
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

  .buttonRegistrame {
    display: block;
    margin: 15px 15px;
    font-size: 0.9em;
    width: 140px;
    font-weight: bold;
    padding: 10px 20px;
    border-radius: 4px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    box-shadow: 2px 2px 10px rgb(0, 0, 0, 0.5);
    background-color: #2FD276;
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

  .tabla-contenedor .tabla {
    display: block;
    margin: 15px 15px;
    padding: 10px 20px;
    border-radius: 4px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    box-shadow: 2px 2px 10px rgb(0, 0, 0, 0.5);
    text-align: center;
    justify-content: center;
  }

  .tabla-contenedor th, td {
    border: solid 1px #1A1A1A;
  }

  .tbody {
    font-size: 17px;
    font-weight: bold 1px;
  }

  .thead {
    /*background-color: #1A1A1A;*/
    background-color: #1A1A1A;
    font-size: 18px;
    color: white;
    font-weight: normal;
  }

  .button-edit {
    display: block;
    font-size: 0.7em;
    width: 50px;
    margin: 0 auto;
    padding: 1px 10px;
    border-radius: 4px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    box-shadow: 1px 1px 5px rgb(0, 0, 0, 0.5);
    background-color:  blueviolet;
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
@endsection

@section('contenido-derecha')
<div class="crud">
  <div class="registrar">
    <a href="{{'/administrativos/create'}}" class="buttonRegistrame">
      Registrar <br>Administrativo
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
          <th>Direccion</th>
          <th>Email</th>
          <th>Fecha nacimiento</th>
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
          <td>{{$admin->persona->direccion}}</td>
          <td>{{$admin->persona->email}}</td>
          <td>{{$admin->persona->fecha_de_nacimiento}}</td>
          <td>{{$admin->persona->sexo}}</td>
          <td><a href="{{route('administrativos.edit', $admin)}}" class="button-edit">
              <span class="text">Editar</span>
            </a></td>
          <td><a href="#" class="button-edit" id="ver">
            <span class="text">Ver</span>
          </a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection