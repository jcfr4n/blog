<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Home</title>
    @stack('css')
</head>
<body>
    <header></header>

    @yield('content')

    <footer></footer>
</body>
</html>
