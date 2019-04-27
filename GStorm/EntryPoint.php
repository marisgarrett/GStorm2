<?php
    namespace GStorm;

    class EntryPoint {
        private $routes;
        
        public function __construct(\GStorm\IRoutes $routes) {
            $this->routes = $routes;
        }

        public function run() {
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            error_reporting(E_ALL);
            
            if (session_id() == "") {
                session_start();
            }

            require 'database.php';

            $route = ltrim(explode('?', $_SERVER['REQUEST_URI'])[0], '/');
            
            $routes = $this->routes->getRoutes();

            if (isset($routes[$route]['login'])) {
                $this->routes->checkLogin();
            }

            $method = $_SERVER['REQUEST_METHOD'];

            $controller = $routes[$route][$method]['controller'];
            $function = $routes[$route][$method]['function'];

            $page = $controller->$function();

            $output = $this->loadTemplate('templates/' . $page['template'], $page['variables']);
            $title = $page['title'];
            require 'templates/layout.html.php';
        }

        public function loadTemplate($fileName, $templateVars) {
            extract($templateVars);
            ob_start();
        
            require $fileName;
            $contents = ob_get_clean();
        
            return $contents;
        }
    }
?>