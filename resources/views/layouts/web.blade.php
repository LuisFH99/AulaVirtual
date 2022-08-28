<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Aula Virtual</title>
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">



    <!-- iconos -->
    <link rel="stylesheet"
        href="{{ asset('icons/fontawesome-free-6.0.0-web/fontawesome-free-6.0.0-web/css/all.min.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('img/logo-fundasam.png') }}">

    <!--estilo de la pagina de referencia -->
    <link href="https://aula.enppeduca.com/css/web.css?v=1658340886" rel="stylesheet">

    @livewireStyles
    @yield('css')
    

</head>

<body>

    @include('web.navbar')

    @yield('content')

    @include('web.footer')
    <!-- bootstrap 5-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/actions.js') }}"></script>
    <script src="{{ asset('js/jquery-1.9.1.min.js') }}"></script>
    @livewireScripts
    @yield('js')


</body>
