<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel | Posts | {{$post->id}} </title>
</head>
<body>
    <a href="{{ route('posts.index') }}">Volver a Posts</a>
    <h1>{{ $post->title }}</h1>
    <p>
        <b>Categoría: </b> {{ $post->category }}
    </p>
    <p>
        {{ $post->content }}
    </p>
    <a href="{{ route('posts.edit', [$post->id]) }}">Editar post</a>
    <form action="{{ route('posts.destroy', [$post->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <button type="submit">Eliminar post</button>
    </form>
</body>
</html>
