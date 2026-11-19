<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('pestaña')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body class="bg-dark text-center">
    <div class="titulo" style="background-image: url('{{ asset('img/Piedra.png') }}');">
        <img src="{{ asset('img/title.png') }}" width="720" height="240" class="mx-auto img-fluid">
    </div>

    @yield('titulo')

    {{-- Menú: cada vista puede definir el suyo; si no, se muestra el botón Volver --}}
    @hasSection('menu')
        @yield('menu')
    @else
        <nav>
            <ul class="list-unstyled">
                <li>
                    <a href="{{ url('/') }}" type="button" class="btn text-center mt-2 text-light" style="background-image: url('{{ asset('img/oscuro.png') }}'); font-size: x-large; background-size: cover; width: 150px; height: 70px;">Volver</a>
                </li>
            </ul>
        </nav>
    @endif

    @yield('contenido')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
