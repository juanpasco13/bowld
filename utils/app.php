<?php

class App {

    function __construct(){
        session_start();
        
        // $_SESSION['name'] ;
        // $_SESSION['id'] ;
        // $_SESSION['user'] ;
        // $_SESSION['rol'];
        // $_SESSION['genero'];

        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, "/");
        $url = explode("/", $url);

    
        if(isset($_SESSION['logged_in']) && isset($_SESSION['id']) && $_SESSION['id'] != 0) {
            // Verificamos si ha pasado más de cinco minutos sin actividad
            // 5 minutos en segundos        
            if(isset($_SESSION['tiempo']) && ( time() - $_SESSION['tiempo']) > 300) {
                // Si ha pasado más de cinco minutos sin actividad, eliminamos la sesión y redirigimos al usuario al login
                
                session_unset();
                session_destroy();
                ?>
                <script Language="JavaScript" type="text/javascript">
                    alert("Tiempo de espera superado, inicie nuevamente sesion");
                    window.location.href = window.location.protocol + "//" + window.location.host + '/gymax/logout';
                </script>
                <?php
            }
        
            // Si no ha pasado más de cinco minutos sin actividad, actualizamos el tiempo de la sesión
            $_SESSION['tiempo'] = time();

        }         
                       
        $this->routerBase($url);

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1 && $url[0] != 'api'){
            
            switch ($url[0]){
                case 'login':
                    header('Location: '.constant('URL').'home');
                    break;
                case 'upuser':
                    include 'controllers/usersController.php';
                    $controller = new Users();
                    $controller->loadModel('users');
                    $controller->updateUser($_POST);
                    header('Location: '.constant('URL').'users');
                    break;
                default:
                    $fileController = 'controllers/'.$url[0].'Controller.php';
                    if(file_exists($fileController)){
                        include $fileController;
                        $controller = new $url[0];
                        $controller->loadModel($url[0]);

                    }else{
                        header('Location: '.constant('URL').'home');
                    }
                    $controller->render();
            }
        }
    
    }

    function loginSession(){
        include 'controllers/loginController.php';
        $controller =  new Login();
        $controller->loadModel('Login');
        return $controller;
    }

    function routerBase($url){
        
        switch ($url[0]){
            case 'validate':
                $login = $this->loginSession();
            
                if($login->register($_POST['username'], $_POST['password'])){
                    unset($_POST['username']);
                    unset($_POST['password']);

                    $_SESSION['logged_in'] = 1;
                    $login->updateLogin($_SESSION['id']);
                    header('Location: '.constant('URL').'home');

                }
                else{
                    if ( $login->validateUser( $_POST['username'] ) ) {
                        $message = "Ingreso mal las credenciales";
                        $site = 'login';
                    }else{
                        $message = "El usuario no existe, cree una cuenta";
                        $site = 'register';
                    }
                    ?>
                    <script Language="JavaScript" type="text/javascript">
                        alert("<?php echo $message ?>");
                        window.location.href = window.location.protocol + "//" + window.location.host + '/Bowld/<?php echo $site ?>';
                    </script>
                    <?php
                }
                break;
                
            case 'logout':
                session_unset();
                session_destroy();

                header('Location: '.constant('URL').'login'); 
                break;

            case 'register':
                include 'controllers/registerController.php';
                $controller = new Register();
                $controller->render();
                break;

            case 'record':
                include 'controllers/registerController.php';
                $controller = new Register();
                $controller->loadModel('register');
                if($controller->registerUser($_POST)){
                    header('Location: '.constant('URL').'login');
                }else{
                    ?>
                    <script Language="JavaScript" type="text/javascript">
                        alert("Ese nombre de usuario ya existe o el numero de documento ya tiene una cuenta asociada. Comuniquese con el administrador del sistema o recupere su cuenta");
                        window.location.href = window.location.protocol + "//" + window.location.host + '/Bowld/register';
                    </script>
                    <?php
                }
                //$controller->render();
                break;

            case 'login':
                if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== 1){
                    $controller = $this->loginSession();
                    $controller->render();
                }
                break;

            case 'iframe':
                
                if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== 1){
                    include 'controllers/iframeController.php';
                    $controller = new Iframe();
                    $controller->loadModel('Iframe');
    
                    
                    if (isset($url[1])){
                        $frame = $url[1];
                        $controller->$frame($_POST);
                    }else{
                        $controller->render();
                    }
                    
                }
                break;

            case 'api':
                
                $fileController = 'controllers/'.$url[1].'Controller.php';
                if(file_exists($fileController)){
                    include $fileController;
                    $controller = new $url[1];
                    $controller->loadModel($url[1]);
                    if(method_exists($controller, $url[2])){
                        $controller->{$url[2]}($url[3]);
                    }
                }
                break;

            default:
            if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== 1){
                header('Location: '.constant('URL').'login');
            }
   
        }

    }
    
}