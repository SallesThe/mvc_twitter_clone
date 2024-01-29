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

        public function register(): void
        {
            $user = Container::getModel('user');
            $user->__set('name', $_POST['name']);
            $user->__set('birthday', $_POST['birthday']);
            $user->__set('password', $_POST['password']);
            $user->__set('confirm_password', $_POST['confirm']);

            
        }
    }