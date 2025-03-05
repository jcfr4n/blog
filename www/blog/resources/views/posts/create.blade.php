
<x-app-layout>
    <a href="/posts">Volver a Posts</a>
    <br>
    <h1>Formulario para la creación de un nuevo post</h1>
    <form action="/posts/create" method="POST">
        @csrf
        <label for="title">Título</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="category">Categoría</label>
        <input type="text" name="category" id="category">
        <br>
        <label for="content">Contenido</label>
        <textarea name="content" id="content" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Crear post</button>
    </form>
</x-app-layout>
