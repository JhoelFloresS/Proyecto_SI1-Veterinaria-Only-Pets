@extends('home')
@section('title', 'categoria')
@section('petshop', 'active')
@section('css-derecha')
    <link rel="stylesheet" href="{{ asset('css/table-information.css') }}">
    <style>
        #categoriaFormUpdate .form-control,
        #categoriaFormUpdate .form-select,
        #categoriaFormUpdate .select2-selection {
            background-color: khaki !important;
        }
    </style>
@endsection

@section('contenido')

<div class="crud">
    
    <div class="d-md-flex justify-content-md-between" style="margin-bottom: 1rem;">
        <form action="{{ route('proveedores.index') }}" method="GET">
            <div class="btn-group">
                <input type=" text" name="busqueda" class="form-control">
                <input type="submit" value="Buscar" class="btn btn-primary"
                    style="background-color: var(--color-danger);">
            </div>
        </form>
    </div>
</div>
@endsection