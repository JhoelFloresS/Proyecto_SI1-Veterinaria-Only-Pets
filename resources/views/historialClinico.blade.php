@extends('home')

@section('historial-clinico', 'active')
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
                <img src="{{ asset('images/historial-clinico/cirugia.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-4 ">Cirugias</h5>
                    <a href="{{ route('cirugias.index') }}">
                        <button type="button" class="btn btn-primary mb-3">Ver lista</button>
                    </a>
                    <button type="button" class="btn btn-success">Crear Cirugia</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="{{ asset('images/historial-clinico/enfermedad.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-4">Enfermedades</h5>
                    <a href="#">
                        <button type="button" class="btn btn-primary mb-3">Ver lista
                        </button>
                    </a>
                    <button type="button" class="btn btn-success">Crear Enfermedad</button>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card">
                <img src="{{ asset('images/historial-clinico/vacuna.jpg') }}" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-4">Vacunas</h5>
                    <a href="{{ route('vacunas.index') }}">
                        <button type="button" class="btn btn-primary mb-3">Ver lista
                        </button>
                    </a>
                    <button type="button" class="btn btn-success">Crear Vacuna</button>
                </div>
            </div>

        </div>
        <div class="col">
            <div class="card">
                <img src="{{ asset('images/historial-clinico/historialclinico.jpg') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title fs-4">Historial Clinico</h5>
                    <a href="#">
                        <button type="button" class="btn btn-primary mb-3">Ver lista</button>
                    </a>
                    <button type="button" class="btn btn-success">Crear Historial clinico</button>
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

@section('js-home')
    <script>

        const createSelector = (type) =>{
            let selector = '.input-datos-telefono-'+type;
            $(selector).select2({
                theme: 'bootstrap-5',
                tags: true,
                placeholder: 'Inserte los telefonos',
                maximumSelectionLength: 3,
                 maximumInputLength: 9,
                 minimumInputLength: 8,
                tokenSeparators: [',', ' '],
                width: '100%'
            })
        }

    </script>
@endsection
