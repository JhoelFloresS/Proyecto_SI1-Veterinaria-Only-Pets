@extends('home')

@section('servicio', 'active')
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
                <img src="{{ asset('images/servicios/servicios.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-4 ">Servicios</h5>
                    <a href="{{ route('servicios.index') }}">
                        <button type="button" class="btn btn-primary mb-3">Ver lista</button>
                    </a>
                    <button type="button" class="btn btn-success">Crear Servicio</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{ asset('images/servicios/solicitudes.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-4">Solicitud De Servicio</h5>
                    <a href="{{ route('solicitudes.index') }}">
                        <button type="button" class="btn btn-primary mb-3">Ver lista
                        </button>
                    </a>
                    <button type="button" class="btn btn-success">Crear Solicitud de servicio</button>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card">
                <img src="{{ asset('images/servicios/turnos.jpg') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-4">Turnos</h5>
                    <a href="{{ route('turnos.index') }}">
                        <button type="button" class="btn btn-primary mb-3">Ver lista
                        </button>
                    </a>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal"data-bs-target="#input-vacuna"
                    >Crear Turno</button>
                </div>
            </div>

        </div>
    </div>
   



@endsection
@section('body-final')
    <x-forms.input-vacunas/>       
@endsection

@section('js-home')
@endsection
