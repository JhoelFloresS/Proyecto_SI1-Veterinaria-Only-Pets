@extends('home')

@section('registrar-datos', 'active')
@section('css-derecha')
<style>
    .col .card {
        height: 100%;
        background: var(--color-background-panel);
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
</style>
@endsection
@section('contenido')


<div class="row d-flex align-items-stretch pt-5  ">
    <div class="col">
        <div class="card">
            <img src="{{asset('images/datos/administrativos.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title fs-4 ">Administrativos</h5>
                <a href="{{route('administrativos.index')}}">
                    <button type="button" class="btn btn-primary mb-3">Ver lista</button>
                </a>
                <button type="button" class="btn btn-success" data-bs-toggle="modal"
                 data-bs-target="#AdministrativoFormInput">Crear Administrativo</button>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="{{asset('images/datos/mascotas.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title fs-4">Mascotas</h5>
                <a href="{{route('mascotas.index')}}">
                    <button type="button" class="btn btn-primary mb-3">Ver lista
                    </button>
                </a>
                <button type="button" class="btn btn-success">Crear Administrativo</button>
            </div>
        </div>
    </div>


    <div class="col">
        <div class="card">
            <img src="{{asset('images/datos/clientes.jpg')}}" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title fs-4">Clientes</h5>
                <a href="{{route('clientes.index')}}">
                    <button type="button" class="btn btn-primary mb-3">Ver lista
                    </button>
                </a>
                <button type="button" class="btn btn-success"  data-bs-toggle="modal"
                data-bs-target="#ClienteFormInput">Crear Cliente</button>
            </div>
        </div>

    </div>
    <div class="col">
        <div class="card">
            <img src="{{asset('images/datos/veterinarios.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title fs-4">Veterinarios</h5>
                <a href="{{route('veterinarios.index')}}">
                    <button type="button" class="btn btn-primary mb-3">Ver lista</button>
                </a>
                <button type="button" class="btn btn-success" 
                data-bs-toggle="modal"
                 data-bs-target="#VeterinarioFormInput">Crear Veterinario</button>
            </div>
        </div>
    </div>
</div>




@endsection
@section('body-final')
    <x-forms.input-datos id="VeterinarioFormInput" type="veterinario" />
    <x-forms.input-datos id="AdministrativoFormInput" type="administrativo" />
    <x-forms.input-datos id="ClienteFormInput" type="cliente" />    
@endsection
@section('jsH')

@endsection
