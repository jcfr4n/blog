<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <script src="https://unpkg.com/@tailwindcss/browser@4"></script> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Laravel | Posts | listar</title>
</head>
<body>
    <h1>Aquí se mostrarán todos los posts</h1>
    <a href="/posts/create">Crear post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="posts/{{ $post->id }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
    {{ $posts->links() }}
</body>
</html>
