@extends('home')
@section('title', 'historial-clinico')
@php
$active = Auth::user()->hasRole('cliente') ? 'mis-mascotas' : 'historial-clinico';
@endphp
@section($active, 'active')

@section('css-derecha')
    <link rel="stylesheet" href="{{ asset('css/table-information.css') }}">
@endsection

@section('contenido')


    @if (!Auth::user()->hasRole('cliente'))
        <div class="registrar">
            <button href="#" class="buttonRegistrame" data-bs-toggle="modal" data-bs-target="#diagnosticosFormInput"
                onclick="createSelector('Input')">
                Registrar <br>Diagnostico
            </button>
        </div>
    @endif

    <div class="container-fluid">
        <div class="row">
            <div class="tabla" style="padding: 3rem;">

                <h1 style="text-align: center;">Historial Clinico</h1>



                    <h1>{{ $historiale->mascota->nombre }}</h1>
                    <h3>{{ $historiale->mascota->raza }} | {{ $historiale->mascota->descripcion }}</h3>
                    <p>
                        <strong>Peso</strong>: @if ($historiale->peso)
                            {{ $historiale->peso }}
                        @else
                            ---
                        @endif <br>
                        <strong>Talla</strong>: @if ($historiale->talla)
                            {{ $historiale->talla }}
                        @else
                            ---
                        @endif
                    </p>

                    <hr>
                    <div style="display: flex;">

                        <p>
                        <div style="padding: 0 1rem;">
                            <h2>Consultas:</h2>
                            <p>
                                @forelse($historiale->detalle_historial as $detalle)
                                    <strong>Fecha de consulta</strong>: {{ $detalle->fecha_consulta }}
                                    <br>
                                    <strong>Descripcion</strong>: {{ $detalle->descripcion }}
                                    <br>
                                    <strong>Fecha proxima consulta</strong>: {{ $detalle->fecha_prox_consulta }}
                                    <br> <br>
                                @empty
                                    No tiene consultas
                                @endforelse
                            </p>
                        </div>
                        </p>

                        <div style="width:1px; height:auto; background-color:silver;"></div>

                        <p>
                        <div style="padding: 0 1rem;">
                            <h2>Cirugias:</h2>
                            <p>
                                @forelse($historiale->cirugia as $cirugia)
                                    <strong>Nombre</strong>: {{ $cirugia->nombre }}
                                    <br>
                                    <strong>Fecha</strong>: {{ $cirugia->pivot->fecha }}
                                    <br>
                                    <strong>Hora</strong>: {{ $cirugia->pivot->hora }}
                                    <br>
                                    <strong>Veterinario encargado</strong>: {{ $cirugia->pivot->veterinario_encargado }}
                                    <br> <br>
                                @empty
                                    No tiene cirugias
                                @endforelse
                            </p>
                        </div>
                        </p>

                        <div style="width:1px; height:auto; background-color:silver;"></div>

                        <p>
                        <div style="padding: 0 1rem;">
                            <h2>Enfermedades:</h2>
                            <p>
                                @forelse($historiale->enfermedad as $enfermedad)
                                    <strong>Nombre</strong>: {{ $enfermedad->nombre }}
                                    <br>
                                    <strong>Fecha de deteccion</strong>: {{ $enfermedad->pivot->fecha_deteccion }}
                                    <br>
                                    <strong>Inicio de tratamiento</strong>: @if ($enfermedad->pivot->inicio_tratamiento)
                                        {{ $enfermedad->pivot->inicio_tratamiento }}
                                    @else
                                        ---
                                    @endif
                                    <br>
                                    <strong>Fin de tratamiento</strong>: @if ($enfermedad->pivot->fin_tratamiento)
                                        {{ $enfermedad->pivot->fin_tratamiento }}
                                    @else
                                        ---
                                    @endif
                                    <br><br>
                                @empty
                                    No tiene enfermedades
                                @endforelse
                            </p>
                        </div>
                        </p>

                        <div style="width:1px; height:auto; background-color:silver;"></div>

                        <p>
                        <div style="padding: 0 1rem;">
                            <h2>Vacunas:</h2>
                            <p>
                                @forelse($historiale->vacuna as $vacuna)
                                    <strong>Nombre</strong>: {{ $vacuna->nombre }}
                                    <br>
                                    <strong>Dosis</strong>: {{ $vacuna->pivot->dosis }}
                                    <br>
                                    <strong>Fecha de apliacion</strong>: {{ $vacuna->pivot->fecha_aplicacion }}
                                    <br>
                                    <strong>Fecha proxima apliacion</strong>: @if ($vacuna->pivot->fecha_prox_aplicacion)
                                        {{ $vacuna->pivot->fecha_prox_aplicacion }}
                                    @else
                                        ---
                                    @endif
                                    <br><br>
                                @empty
                                    No tiene vacunas aplicadas
                                @endforelse
                            </p>
                        </div>
                        </p>
                    </div>



                </div>
                <hr>

                <div class="col d-flex flex-row ">
                    <a href="{{ route('historiales.pdf', $historiale) }}" class="buttonRegistrame me-4">Exportar PDF</a>
                    <a @if (!Auth::user()->hasRole('cliente')) href="{{ route('historiales.index') }}"
                              @else
                                href="{{ route('mascotas.my') }}" @endif
                        class="buttonRegistrame">Volver Atras

                    </a>

                </div>
            </div>
        </div>
        </div>

@endsection

@section('body-final')

    <x-diagnosticos-input id="diagnosticosFormInput" />0

@endsection


@section('js-home')
    <script>
        const createSelector = (type) => {

            $('#formDiagnosticosInput' + ' #enfermedades').select2({
                theme: 'bootstrap-5',
                placeholder: 'Seleccione las enfermedades',
                width: '100%'
            })
            $('#formDiagnosticosInput' + ' #vacunas').select2({
                theme: 'bootstrap-5',
                placeholder: 'Seleccione las vacunas',
                width: '100%'
            })
            $('#formDiagnosticosInput' + ' #cirugias').select2({
                theme: 'bootstrap-5',
                placeholder: 'Seleccione las cirugias',
                width: '100%'
            })
            $("#formDiagnosticosInput #id_historial").attr("value", {
                {
                    $historiale - > id
                }
            })
            $('#formDiagnosticosInput' + ' #fechas').select2({
                theme: 'bootstrap-5',
                tags: true,
                placeholder: 'Inserte las fechas Day-Month-Year',
                maximumSelectionLength: 3,
                maximumInputLength: 10,

                tokenSeparators: [',', ' '],
                width: '100%',
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
            $("#solicitudesFormUpdate #id_cliente option")[0].selected = "true"
            if (datos.id_cliente) {
                const id_cliente = datos.id_cliente ?? null
                const id_clienteSelected = "#solicitudesFormUpdate #id_cliente " + "option[value=" + String(id_cliente) +
                    "]"
                $("#solicitudesFormUpdate #id_cliente option").each((i, e) => {
                    $(e).attr("selected", false)
                    // console.log(e)
                })
                $(id_clienteSelected).attr("selected", true)
            }

            //PARA LA MASCOTA
            $("#solicitudesFormUpdate #id_mascota option")[0].selected = "true"
            if (datos.id_mascota) {
                const id_mascota = datos.id_mascota ?? null
                const id_mascotaSelected = "#solicitudesFormUpdate #id_mascota " + "option[value=" + String(id_mascota) +
                    "]"
                $("#solicitudesFormUpdate #id_mascota option").each((i, e) => {
                    $(e).attr("selected", false)
                    // console.log(e)
                })
                $(id_mascotaSelected).attr("selected", true)
            }

            //PARA EL RECIBO
            $("#solicitudesFormUpdate #id_recibo option")[0].selected = "true"
            if (datos.id_recibo) {
                const id_recibo = datos.id_recibo ?? null
                const id_reciboSelected = "#solicitudesFormUpdate #id_recibo " + "option[value=" + String(id_recibo) + "]"
                $("#solicitudesFormUpdate #id_recibo option").each((i, e) => {
                    $(e).attr("selected", false)
                })
                $(id_reciboSelected).attr("selected", true)
            }

            //PARA LOS SERVICIOS
            $("#solicitudesFormUpdate #servicios option")[0].selected = "true"
            if (datos.id_servicio) {
                const servicios = datos.id_servicio ?? null
                const serviciosSelected = "#solicitudesFormUpdate #servicios " + "option[value=" + String(servicios) + "]"
                $("#solicitudesFormUpdate #servicios option").each((i, e) => {
                    $(e).attr("selected", false)
                })
                $(serviciosSelected).attr("selected", true)
            }

            let action = "/solicitudes/" + datos.id

            $('#solicitudesFormUpdate form').attr('action', action)


        }
    </script>


@endsection
