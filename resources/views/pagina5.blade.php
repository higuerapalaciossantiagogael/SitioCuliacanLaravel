@extends('master')

@section('pestaña')
    <title>LomitaTown - Ubicación</title>
@endsection

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-3">
                <img src="{{ asset('img/ubi.jpg') }}" width="578" height="320" class="img-fluid">
            </div>
            <div class="col-md-8">
                <p class="mt-2 text-light p-3 rounded" style="background-image: url('{{ asset('img/oscuro.png') }}'); font-size: large;">
                    El santuario se sitúa en el remate de la principal arteria vial de Culiacán, la Avenida Álvaro Obregón.<br><br>
                    <strong>Dirección:</strong> Paseo Humaya S/N, Col. Guadalupe, C.P. 80220, Culiacán Rosales, Sinaloa.
                </p>
            </div>
        </div>
    </div>
@endsection
