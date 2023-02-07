<?php
    namespace MVC;

    class Router {
        public $rutasGET = [];
        public $rutasPOST = [];

        public function __construct() {
            
        }

        public function get ($url, $fn) {
            $this->rutasGET[$url] = $fn;
        }

        public function post($url, $fn) {
            $this->rutasPOST[$url] = $fn;
        }

        public function comprobarRutas () {
            $urlActual = $_SERVER['PATH_INFO'] ?? '/';
            $metodo = $_SERVER['REQUEST_METHOD'];

            if($metodo === 'GET') {
                $fn = $this->rutasGET[$urlActual] ?? null;
            }
            else if($metodo === 'POST') {
                $fn = $this->rutasPOST[$urlActual] ?? null;
            }

            //La está registrada y tiene una función asociada
            if($fn) {
                //Llamamos la función
                call_user_func($fn, $this);
            }
            else{
                //Renderizo página 404
            }
        }

        public function render($view, $datos = []) {
            foreach($datos as $key => $value){
                $$key = $value;
            }


            //Almacena en memoria durante un momento
            ob_start();
            include __DIR__ . "/views/$view.php"; 
            //Retorna y limpia el buffer, en la memoria se salva lo que se guardó temporalmente
            $contenido = ob_get_clean();
            include __DIR__ . "/views/layout.php";
        }
    }