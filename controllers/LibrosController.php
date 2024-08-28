<?php

class LibrosController {
    private $model;

    public function __construct() {
        $this->model = new Libro();
    }

    public function index() {
        $libros = $this->model->obtenerLibros();
        require_once __DIR__ . '/../views/libros/index.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->crearLibro($_POST);
            header('Location: /libros');
        } else {
            require_once '../views/libros/create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->actualizarLibro($id, $_POST);
            header('Location: /libros');
        } else {
            $libro = $this->model->obtenerLibro($id);
            require_once '../views/libros/edit.php';
        }
    }

    public function delete($id) {
        $this->model->eliminarLibro($id);
        header('Location: /libros');
    }
}
