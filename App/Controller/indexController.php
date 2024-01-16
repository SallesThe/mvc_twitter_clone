<?php 
    namespace App\Controller; 
    use MF\Controller\Action;
    use MF\Model\Container;

    class IndexController extends Action
    {
        public function loadIndexPage(): void
        {
            $model = Container::getModel('user');
            $this->render('index');
        }
    }