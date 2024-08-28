<h1>Editar Libro</h1>
<form action="/libros/edit/<?= $libro['id'] ?>" method="POST">
    <label for="titulo">Título:</label>
    <input type="text" name="titulo" value="<?= $libro['titulo'] ?>" required>
    <br>
    <label for="autor">Autor:</label>
    <input type="text" name="autor" value="<?= $libro['autor'] ?>" required>
    <br>
    <label for="año_publicacion">Año de Publicación:</label>
    <input type="number" name="año_publicacion" value="<?= $libro['año_publicacion'] ?>" required>
    <br>
    <label for="genero">Género:</label>
    <input type="text" name="genero" value="<?= $libro['genero'] ?>" required>
    <br>
    <input type="submit" value="Actualizar">
</form>
<a href="/libros">Volver a la lista</a>
