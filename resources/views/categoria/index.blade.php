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