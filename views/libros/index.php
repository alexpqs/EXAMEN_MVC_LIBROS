<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Libros</title>
    <link rel="stylesheet" href="/css/styles.css"> <!-- Ruta al archivo CSS -->
</head>
<body>
    <div class="container">
        <h1>Listado de libros disponibles para préstamo</h1>
        <table class="books-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Autor</th>
                    <th>Año de Publicación</th>
                    <th>Género</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se iterarán los libros -->
                <?php foreach ($libros as $libro): ?>
                    <tr>
                        <td><?php echo $libro['id']; ?></td>
                        <td><?php echo $libro['titulo']; ?></td>
                        <td><?php echo $libro['autor']; ?></td>
                        <td><?php echo $libro['año_publicacion']; ?></td>
                        <td><?php echo $libro['genero']; ?></td>
                        <td>
                            <a href="/libros/edit?id=<?php echo $libro['id']; ?>" class="btn-edit">Editar</a>
                            <a href="/libros/delete?id=<?php echo $libro['id']; ?>" class="btn-delete">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/libros/create" class="btn-add">Agregar Nuevo Libro</a>
    </div>
</body>
</html>