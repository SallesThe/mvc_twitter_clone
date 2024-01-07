<?php 
    namespace App\Controller;
    class IndexController
    {
        private $view;

        public function __construct() 
        {
            $this->view = new \stdClass;
        }

        public function loadIndexPage(): void
        {
            $this->render('index');
        }

        public function render($view, $layout = 'layout'): void
        {
            $this->view->page = $view;
            if(file_exists("../App/View/$layout.phtml"))
            {
                require_once "../App/View/$layout.phtml";
            } else {
                $this->content();
            }
        }

        protected function content(): void
        {
            $currentClass = get_class($this);
            $currentClass = str_replace('App\\Controller','',$currentClass);
            $currentClass = str_replace('Controller','',$currentClass);
            $currentClass = str_replace('\\','',$currentClass);

            require_once "../App/View/$currentClass/" . $this->view->page . ".phtml";
        }
    }