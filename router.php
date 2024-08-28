<?php

class Router {
    public function __construct() {
        // Verifica si 'controller' y 'action' están presentes en $_GET, si no asigna valores por defecto
        $controller = isset($_GET['controller']) ? $_GET['controller'] : 'libros';
        $action = isset($_GET['action']) ? $_GET['action'] : 'index';

        // Dependiendo del controlador especificado, realiza la carga correspondiente
        if ($controller === 'libros') {
            require_once 'controllers/LibrosController.php';
            $controller = new LibrosController();
            if (method_exists($controller, $action)) {
                $controller->{$action}();
            } else {
                // Manejo de error si la acción no existe
                echo "La acción '{$action}' no existe en el controlador '{$controller}'.";
            }
        } else {
            echo "Controlador no encontrado!";
        }
    }
}
