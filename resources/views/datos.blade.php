@extends('home')

@section('registrar-datos', 'active')
@section('css-derecha')
    <style>
        .col {
        /*additive-symbols:     height: 90%;*/
        }

        .col .card {
            height: 100%;
        }

        .card>img {
            height: 60%;
        }

        .card .card-body {
            height: 40%;
        }

        .card button {
            width: 100%;
        }

        #container-datos{
            margin-top: 5%;
        }

    </style>
@endsection
@section('contenido')
    <div class="row-gl d-flex flex-wrap align-items-stretch" id="container-datos">
        <div class="col p-3">
            <div class="card">
                <img src="{{ asset('images/datos/administrativos.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-4 ">Administrativos</h5>
                    <a href="{{ route('administrativos.index') }}">
                        <button type="button" class="btn btn-primary mb-3">Ver lista</button>
                    </a>
                    <button type="button" id='abriModal' class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Crear
                        Administrativo</button>
                </div>
            </div>
        </div>
        <div class="col p-3">
            <div class="card">
                <img src="{{ asset('images/datos/mascotas.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-4">Mascotas</h5>
                    <a href="{{ route('mascotas.index') }}">
                        <button type="button" class="btn btn-primary mb-3">Ver lista
                        </button>
                    </a>
                    <button type="button" class="btn btn-success">Crear Mascota</button>
                </div>
            </div>
        </div>


        <div class="col p-3">
            <div class="card">
                <img src="{{ asset('images/datos/clientes.jpg') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-4">Clientes</h5>
                    <a href="{{ route('clientes.index') }}">
                        <button type="button" class="btn btn-primary mb-3">Ver lista
                        </button>
                    </a>
                    <button type="button" class="btn btn-success">Crear Cliente</button>
                </div>
            </div>

        </div>
        <div class="col p-3">
            <div class="card">
                <img src="{{ asset('images/datos/veterinarios.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-4">Veterinarios</h5>
                    <a href="{{ route('veterinarios.index') }}">
                        <button type="button" class="btn btn-primary mb-3">Ver lista</button>
                    </a>
                    <button type="button" class="btn btn-success">Crear Veterinario</button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal del administrativo create --}}
  <!-- Button trigger modal -->





@endsection
@section('body-final')
<div class="modal fade" id="exampleModal" tabindex="5" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('jsH')

@endsection
