<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Reserva de Mesas</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="site-header">
        <div class="logo-container">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo do Restaurante" class="site-logo">
            </a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
