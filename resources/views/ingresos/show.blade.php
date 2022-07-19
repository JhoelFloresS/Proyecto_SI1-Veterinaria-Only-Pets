@extends('home')
@section('title', 'Ingresos')

@section('petshop','active')

@section('css-derecha')
<link rel="stylesheet" href="{{asset('css/table-information.css')}}">
@endsection

@section('contenido')
<div class="container-fluid">
    <div class="row">
        <div class="tabla" style="padding: 3rem;">
            <h1>Nota de ingreso</h1>
            <strong>Proveedor :</strong>{{ $ingresos->proveedor->nombre }}<br>
            <strong>Producto :</strong>: {{$ingresos->producto->nombre}}<br>
            <strong>Administrativo :</strong>: {{$ingresos->administrativo->persona->nombre}}<br>
            <strong>Cantidad :</strong>: {{$ingresos->cantidad}}<br>
            <strong>Fecha :</strong>: {{$ingresos->fecha}}<br>
            <strong>Hora :</strong>: {{$ingresos->hora}}<br>
            <strong>Monto Total :</strong>: {{$ingresos->monto_total}}<br>
            <div class="col" style="margin-top: 2.5%;">
                <a href="{{route('ingresos.index')}}" class="buttonRegistrame">Volver Atras</a>
            </div>
        </div>
    </div>
</div>

@endsection