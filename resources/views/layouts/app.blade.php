<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Llamar al CSS --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    {{-- Llamar a bootstrap --}}
    @vite('resources/js/app.js')

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    {{-- Título del documento --}}
    <title>@yield('titulo')</title>
</head>
<body>

    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('rutaInicio')?'text-primary':''}}" href="{{route('rutaInicio')}}" aria-current="page">Principal</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link {{request()->routeIs('rutaRegistroLibros')?'text-primary':''}}" href="{{route('rutaRegistroLibros')}}" >Registro de libro</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    @yield('contenido')
    
    <footer>
        <div class="container  mt-5">
            <div class="row">
                Biblioteca Gómez - @copyright reserved 2024 - 29 de Octube de 2024
            </div>
        </div>
    </footer>
</body>
</html>