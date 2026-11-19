@extends('master')

@section('pestaña')
    <title>LomitaTown</title>
@endsection

@section('menu')
    <nav>
        <ul class="text-center list-unstyled" style="font-size: xx-large;">
            <li class="d-inline-block m-2">
                <a href="{{ url('/pagina2') }}" type="button" class="btn text-center text-light" style="background-image: url('{{ asset('img/button.png') }}'); background-size: cover; width: 150px; height: 70px;">Presentación</a>
            </li>
            <li class="d-inline-block m-2">
                <a href="{{ url('/pagina3') }}" type="button" class="btn text-center text-light" style="background-image: url('{{ asset('img/button.png') }}'); background-size: cover; width: 150px; height: 70px;">Características</a>
            </li>
            <li class="d-inline-block m-2">
                <a href="{{ url('/pagina4') }}" type="button" class="btn text-center text-light" style="background-image: url('{{ asset('img/button.png') }}'); background-size: cover; width: 150px; height: 70px;">Historia</a>
            </li>
            <li class="d-inline-block m-2">
                <a href="{{ url('/pagina5') }}" type="button" class="btn text-center text-light" style="background-image: url('{{ asset('img/button.png') }}'); background-size: cover; width: 150px; height: 70px;">Ubicación</a>
            </li>
            <li class="d-inline-block m-2">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSettnObRX0YSgB16enHawZmziV4I6yKve5-B9MKpkzMhSnMrQ/viewform?usp=sf_link" target="_blank" type="button" class="btn text-center text-light" style="background-image: url('{{ asset('img/button.png') }}'); background-size: cover; width: 150px; height: 70px;">Opinión</a>
            </li>
        </ul>
    </nav>
@endsection

@section('contenido')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <img src="{{ asset('img/lom.jpg') }}" width="720" height="480" class="img-fluid">
            </div>
        </div>
    </div>
@endsection
