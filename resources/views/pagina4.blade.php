@extends('master')

@section('pestaña')
    <title>LomitaTown - Historia</title>
@endsection

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-3">
                <img src="{{ asset('img/his.jpg') }}" width="578" height="320" class="img-fluid">
            </div>
            <div class="col-md-8">
                <p class="mt-2 text-light p-3 rounded" style="background-image: url('{{ asset('img/oscuro.png') }}'); font-size: large;">Origen (Siglo XIX): Comenzó como una pequeña ermita dedicada a la Virgen en la cima de un cerro cuando la zona estaba alejada de la urbe.</p>
            </div>

            <div class="col-12 mb-3 mt-4">
                <img src="{{ asset('img/his2.jpg') }}" width="578" height="320" class="img-fluid">
            </div>
            <div class="col-md-8">
                <p class="mt-2 text-light p-3 rounded" style="background-image: url('{{ asset('img/oscuro.png') }}'); font-size: large;">La promesa militar: La famosa escalinata fue mandada a construir alrededor de 1911 por el General Ramón F. Iturbe como promesa durante la Revolución Mexicana.</p>
            </div>

            <div class="col-12 mb-3 mt-4">
                <img src="{{ asset('img/lomita.jpg') }}" width="480" height="320" class="img-fluid">
            </div>
            <div class="col-md-8">
                <p class="mt-2 text-light p-3 rounded" style="background-image: url('{{ asset('img/oscuro.png') }}'); font-size: large;">Templo actual (1958 - 1967): Ante el crecimiento de feligreses, el templo antiguo fue demolido para construir la majestuosa estructura modernista actual, diseñada por los arquitectos Enrique y Agustín Landa Verdugo.</p>
            </div>
        </div>
    </div>
@endsection
