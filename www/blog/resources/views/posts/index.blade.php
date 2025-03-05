<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
</body>
</html>
