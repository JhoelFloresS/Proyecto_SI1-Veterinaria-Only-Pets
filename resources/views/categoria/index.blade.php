@extends('home')
@section('title', 'categoria')
@section('servicio', 'active')
@section('css-derecha')
    <link rel="stylesheet" href="{{ asset('css/table-information.css') }}">
    <style>
        #ServicioFormUpdate .form-control,
        #ServicioFormUpdate .form-select,
        #ServicioFormUpdate .select2-selection {
            background-color: khaki !important;
        }
    </style>
@endsection