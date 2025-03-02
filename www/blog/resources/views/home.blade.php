<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12 | Home</title>
</head>
<body>
        {{-- <h1>Bienvenido a la página principal</h1> --}}
        <x-alert type="info" margin="mb-4">
            <x-slot name="title">Information</x-slot>
            Contenido de la alerta
        </x-alert>
</body>
</html>
