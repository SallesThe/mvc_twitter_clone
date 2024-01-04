<?php 
    namespace App;
    class Route
    {
        private $routes;

        public function __construct() 
        {
            $this->initRoutes();
        }

        public function getRoutes(): array
        {
            return $this->routes;
        }

        public function setRoutes(Array $routes): void
        {
            $this->routes = $routes;
            $this->run($this->requestURI());
        }


        public function initRoutes(): void
        {
            $routes['index'] = array(
                "route" => "/",
                "controller" => "indexController",
                "action" => "loadIndexPage"
            );

            $this->setRoutes($routes);
        }

        public function run($requestURI): void
        {
            foreach ($this->getRoutes() as $path => $route) {
                if($requestURI == $route['route'])
                {
                    $class = "App\\Controller\\" . $route['controller'];
                    $controller = new $class;
                    $action = $route['action'];
                    
                    $controller->$action();
                }
            }
        }

        public function requestURI(): mixed
        {
            return parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }