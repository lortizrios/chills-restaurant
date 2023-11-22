<?php
    include_once 'db.php';
    
    function startSession(){
        session_destroy();
        session_start();
    }

    function obtenerUsuarioPorCorreo($email, $base_de_datos) {
        $query = $base_de_datos->prepare("SELECT email FROM users WHERE email = ? LIMIT 1;");
        $query->execute([$email]);
        return $query->fetchObject();
    }

    function login($email, $base_de_datos) {
        $posibleUsuarioRegistrado = obtenerUsuarioPorCorreo($email, $base_de_datos);

        if ($posibleUsuarioRegistrado === null) {
            return false;
        }

        iniciarSesion($posibleUsuarioRegistrado);
        return true;
    }

    function iniciarSesion($usuario) {
        session_start();
        $_SESSION["correo"] = $usuario->email;
    }

    function registrarUsuario($name, $email, $password, $user_type,$base_de_datos)
    {
        $query = $base_de_datos->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        return $query->execute([$name, $email, $password, $user_type]);
        
    }

    function printSessions(){
        if($_SESSION['login']){
            echo 'Login = True | ';
        }

        if ($_SESSION['email']){
            echo 'Email = ' . $_SESSION['email'] . ' | ';
        }

        if($_SESSION['user_type']){
            echo 'User_Type = ' . $_SESSION['user_type'] . '  ';
        }
    }

    //Verifica si usuario inicio la session
    function isLogin():bool{
        $login = $_SESSION['login'];

        if($login === true){
            return true;
        }else{
            return false;
        }
    }

        $loginSuccess = $_SESSION['login'];
        $update = $_SESSION['update'];
        $error_actualizando = $_SESSION['error_actualizar'];
        $delError = $_SESSION['delete-error'];
        $delComplete = $_SESSION['delete-completed'];
        $usuarioDuplicado = $_SESSION['usuario-duplicado'];
        $usuarioRegistrado = $_SESSION['usuario-registrado'];
        $errorRegistrar = $_SESSION['error-registrar'];

        //llama a las funciones creadas en javascript/funtions.js
        //<script>funciones();</script>




    
    

