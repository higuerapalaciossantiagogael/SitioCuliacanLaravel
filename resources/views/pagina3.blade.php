@extends('master')

@section('pestaña')
    <title>LomitaTown - Características</title>
@endsection

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 mb-3">
                <img src="{{ asset('img/lomitaimg.jpg') }}" width="578" height="320" class="img-fluid">
            </div>
            <div class="col-md-8">
                <p class="mt-2 text-light p-3 rounded" style="background-image: url('{{ asset('img/oscuro.png') }}'); font-size: large;">Estilo Modernista: La estructura actual destaca por sus paraboloides hiperbólicos (cubiertas de concreto en forma de picos o alas) que le otorgan una silueta triangular única.</p>
                <p class="mt-2 text-light p-3 rounded" style="background-image: url('{{ asset('img/oscuro.png') }}'); font-size: large;">Vitrales Monumentales: Cuenta con 5 vitrales de gran formato (entre los más grandes de Latinoamérica) que narran las apariciones de la Virgen de Guadalupe y momentos clave de la evangelización en México.</p>
                <p class="mt-2 text-light p-3 rounded" style="background-image: url('{{ asset('img/oscuro.png') }}'); font-size: large;">La Escalinata: Tiene una amplia escalinata de 144 escalones totalmente iluminada que conecta la base de la colina con la entrada principal del santuario.</p>
                <p class="mt-2 text-light p-3 rounded" style="background-image: url('{{ asset('img/oscuro.png') }}'); font-size: large;">Mirador Panorámico: Ofrece una vista de 360 grados sobre el valle y el horizonte de la ciudad.</p>
            </div>
        </div>
    </div>
@endsection
