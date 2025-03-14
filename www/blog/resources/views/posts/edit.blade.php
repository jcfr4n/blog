<x-app-layout>
    <a href="{{ route('posts.index', [$post->id]) }}">Volver a Posts</a>
    <br>
    <h1>Formulario para la creación de un nuevo post</h1>
    <form action="{{ route('posts.update', [$post->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <input type="hidden" name="id" value="{{ $post->id }}">
        <label for="title">Título</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        <br>
        <label for="category">Categoría</label>
        <input type="text" name="category" id="category" value="{{ $post->category }}">
        <br>
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="20" rows="5">{{ $post->content }}</textarea>
        <br>
        <button type="submit">Actualizar post</button>
    </form>
</x-app-layout>
