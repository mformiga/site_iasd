<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/padrao.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <title>@yield('title', 'IASD Central de Brasília')</title>
</head>
<body>
    <main>
        @include('partials.header')

        @yield('content')

        @include('partials.footer')
    </main>
    <aside><img src="{{ asset('img/logo-7-coluna.svg') }}" alt=""></aside>
    
    <script>
        // Variável global com a URL base da aplicação
        window.APP_URL = '{{ url("/") }}';
    </script>
    <script src="{{ asset('js/por_do_sol.js') }}"></script>
    <script src="{{ asset('js/menu_hamburguer.js') }}"></script>
<script src="{{ asset('js/menu_simple.js') }}"></script>
    @stack('scripts')
</body>
</html>

