<?php 
    namespace App\Controller;
    use MF\Controller\Action;

    class IndexController extends Action
    {
        public function loadIndexPage(): void
        {
            $this->render('index');
        }
    }