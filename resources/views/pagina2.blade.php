@extends('master')

@section('pestaña')
    <title>LomitaTown - Presentación</title>
@endsection

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-3">
                <img src="{{ asset('img/lomitaimg1.jpg') }}" width="578" height="320" class="img-fluid">
            </div>
            <div class="col-md-8">
                <p class="mt-2 text-light p-3 rounded" style="background-image: url('{{ asset('img/oscuro.png') }}'); font-size: large;">
                    El templo domina el paisaje de Culiacán desde lo alto de una colina. Funciona no solo como un centro de fe católica dedicado a la Virgen de Guadalupe, sino también como el principal mirador de la ciudad. Es un punto de encuentro habitual para familias, feligreses y visitantes.
                </p>
            </div>
        </div>
    </div>
@endsection
