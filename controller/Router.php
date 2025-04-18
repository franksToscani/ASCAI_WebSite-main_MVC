<?php
class Router {
    public function handleRequest() {
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        switch ($page) {
            case 'notizie_nuova':
                require_once 'controller/NotizieController.php';
                $controller = new NotizieController();
                $controller->create();
                break;

            case 'notizie_store':
                require_once 'controller/NotizieController.php';
                $controller = new NotizieController();
                $controller->store();
                break;

            case 'notizie':
                require_once 'controller/NotizieController.php';
                $controller = new NotizieController();
                $controller->index();
                break;
            case 'evento':
                require_once 'controller/EventiController.php';
                $controller = new EventiController();
                $controller->dettaglio($_GET['id'] ?? 0);
                break;

            case 'iscriviti':
                require_once 'controller/EventiController.php';
                $controller = new EventiController();
                $controller->iscriviti();
                break;

            case 'eventi':
                require_once 'controller/EventiController.php';
                $controller = new EventiController();
                $controller->index();
                break;
            case 'iscrizioni':
                require_once 'controller/IscrizioniController.php';
                $controller = new IscrizioniController();
                $controller->index();
                break;
            case 'login':
                require_once 'controller/AuthController.php';
                $controller = new AuthController();
                $controller->login();
                break;

            case 'login_form':
                require_once 'controller/AuthController.php';
                $controller = new AuthController();
                $controller->loginForm();
                break;

            case 'logout':
                require_once 'controller/AuthController.php';
                $controller = new AuthController();
                $controller->logout();
                break;

            case 'home':
            default:
                include 'view/home.php';
                break;
            case 'register_form':
                require_once 'controller/AuthController.php';
                $controller = new AuthController();
                $controller->registerForm();
                break;

            case 'register':
                require_once 'controller/AuthController.php';
                $controller = new AuthController();
                $controller->register();
                break;
                
        }
    }
}
?>
