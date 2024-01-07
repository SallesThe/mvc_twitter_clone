<?php 
    namespace App;
    use MF\Init\Bootstrap;
    class Route extends Bootstrap
    {
        public function initRoutes(): void
        {
            $routes['index'] = array(
                "route" => "/",
                "controller" => "indexController",
                "action" => "loadIndexPage"
            );

            $this->setRoutes($routes);
        }        
    }