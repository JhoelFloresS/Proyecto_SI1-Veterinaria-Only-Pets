@extends('home')

@section('petshop', 'active')
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
                <img src="{{ asset('images/petshop/proveedores.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-4 ">Proveedores</h5>
                    <a href="#">
                        <button type="button" class="btn btn-primary mb-3">Ver lista</button>
                    </a>
                    
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ProveedorFormInput" onclick="createSelector('proveedor','input')">
                        Registrar Proveedor
                    </button>
                    
                </div>
            </div>
        
    </div>
    <div class="col">
        <div class="card">
            <img src="{{ asset('images/petshop/productos.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title fs-4">Producto</h5>
                <a href="#">
                    <button type="button" class="btn btn-primary mb-3">Ver lista
                    </button>
                </a>
                @can('servicios.index')
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ProductoFormInput" onclick="createSelector('producto','input')">
                    Registrar Producto
                </button>
                @endcan
            </div>
        </div>
    </div>


    <div class="col">
        <div class="card">
            <img src="{{ asset('images/petshop/categorias.jpg') }}" class="card-img-top img-fluid" alt="...">
            <div class="card-body">
                <h5 class="card-title fs-4">Categorias</h5>
                <a href="#">
                    <button type="button" class="btn btn-primary mb-3">Ver lista
                    </button>
                </a>
                @can('turnos.create')
                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#CategoriaFormInput" onclick="createSelector('Input')">
                    Registrar Categoria
                </button>
                @endcan
            </div>
        </div>

    </div>
</div>




@endsection
@section('body-final')
@can('servicios.create')
<x-forms.input-datos-servicios id="ServicioFormInput" type="servicio" />
@endcan
@can('turnos.create')
<x-forms.turnos-input id="turnosFormInput" />
@endcan
@endsection

@section('js-home')
@endsection