<?php

class Libro {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    // Método para obtener todos los libros
    public function obtenerLibros() {
        $stmt = $this->db->prepare("SELECT * FROM libros");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Método para obtener un libro por su ID
    public function obtenerLibro($id) {
        $stmt = $this->db->prepare("SELECT * FROM libros WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Método para crear un nuevo libro
    public function crearLibro($datos) {
        $stmt = $this->db->prepare("INSERT INTO libros (titulo, autor, año_publicacion, genero) VALUES (:titulo, :autor, :año_publicacion, :genero)");
        $stmt->bindParam(':titulo', $datos['titulo']);
        $stmt->bindParam(':autor', $datos['autor']);
        $stmt->bindParam(':año_publicacion', $datos['año_publicacion']);
        $stmt->bindParam(':genero', $datos['genero']);
        return $stmt->execute();
    }

    // Método para actualizar un libro existente
    public function actualizarLibro($id, $datos) {
        $stmt = $this->db->prepare("UPDATE libros SET titulo = :titulo, autor = :autor, año_publicacion = :año_publicacion, genero = :genero WHERE id = :id");
        $stmt->bindParam(':titulo', $datos['titulo']);
        $stmt->bindParam(':autor', $datos['autor']);
        $stmt->bindParam(':año_publicacion', $datos['año_publicacion']);
        $stmt->bindParam(':genero', $datos['genero']);
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }

    // Método para eliminar un libro
    public function eliminarLibro($id) {
        $stmt = $this->db->prepare("DELETE FROM libros WHERE id = :id");
        $stmt->bindParam(':id', $id);
        return $stmt->execute();
    }
}
