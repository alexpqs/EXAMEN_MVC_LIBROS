<h1>Crear Nuevo Libro</h1>
<form action="/libros/create" method="POST">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" required>
    <br>
    <label for="autor">Autor:</label>
    <input type="text" name="autor" required>
    <br>
    <label for="año_publicacion">Año de Publicación:</label>
    <input type="number" name="año_publicacion" required>
    <br>
    <label for="genero">Género:</label>
    <input type="text" name="genero" required>
    <br>
    <input type="submit" value="Crear">
</form>
<a href="/libros">Volver a la lista</a>
