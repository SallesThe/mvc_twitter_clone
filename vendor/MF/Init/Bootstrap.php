<?php 
    namespace MF\Init;
    abstract class Bootstrap
    {
        protected $routes;
        abstract function initRoutes();
        
        public function __construct() 
        {
            $this->initRoutes();
        }

        protected function getRoutes(): array
        {
            return $this->routes;
        }

        protected function setRoutes(Array $routes): void
        {
            $this->routes = $routes;
            $this->run($this->requestURI());
        }

        protected function run($requestURI): void
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

        protected function requestURI(): mixed
        {
            return parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH);
        }
    }
