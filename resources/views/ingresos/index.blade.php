@extends('home')
@section('title', 'Ingresos')

@section('petshop', 'active')

@section('css-derecha')
<link rel="stylesheet" href="{{ asset('css/table-information.css') }}">

<style>
    #ingresosFormUpdate .form-control,
    #ingresosFormUpdate .form-select,
    #ingresosFormUpdate .select2-selection {
        background-color: khaki !important;
    }
</style>
@endsection

@section('contenido')

<div class="crud">


    <div class="d-md-flex justify-content-md-between" style="margin-bottom: 1rem;">
        @can('proveedores.create')
        <div class="registrar">
            <button href="#" class="buttonRegistrame" data-bs-toggle="modal" data-bs-target="#proveedoresFormInput" onclick="createSelector('Input')">
                Registrar Ingresos
            </button>
        </div>
        @endcan
        <form action="{{ route('ingresos.index') }}" method="GET">
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
                    <th>Proveedor</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Monto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="tbody">
                @foreach ($ingresos as $ingreso)
                <tr>
                    <td>{{ $ingreso->id }}</td>
                    <td>{{ $ingreso->proveedor->nombre}}</td>
                    <td>{{ $ingreso->producto->nombre }}</td>
                    <td>{{ $ingreso->cantidad}}</td>
                    <td>{{ $ingreso->monto_total}}</td>
                    <td>
                        <a href="{{ route('ingresos.show', $ingreso->id) }}" class="button-edit" id="ver">
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
        {{ $ingresos->appends('busqueda=>$busqueda') }}
    </div>
</div>
@endsection

@section('body-final')
@can('proveedores.create')
<x-forms.proveedores-input id="proveedoresFormInput" />
@endcan
@can('proveedores.edit')
<x-forms.proveedores-update id="proveedoresFormUpdate" />
@endcan
@endsection

@section('js-home')


@endsection