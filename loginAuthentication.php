<?php
    include_once 'include/funciones.php';

    session_start();

    // conexion a la base de datos
    require_once 'include/db.php';
    
    $conn = dataBaseConnetion();

    // Verifica si hay conexion a la base de datos
    if (!$conn) 
    {
        // Error de conexión a la base de datos 
        // Redireccionar a la página de errores y pasar la variable como parámetro
        header('Location: errorpage0.php');
        exit();
    }
    
    // Verifica si faltan datos en el formulario de Login
    if (!isset($_POST['email'], $_POST['password'])) {
        
        // Obtener el mensaje de error de la conexión
        $customError = "Faltan datos en el formulario";
        
        // Redireccionar a la página de errores y pasar el mensaje como parámetro
        header('Location: errorpage1.html');
        exit();

    }else{
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Verifica si el usuario existe en las bases de datos
    if (mysqli_num_rows($result))
    {
        $row = mysqli_fetch_assoc($result);
        
        // Redireccionar a la página de errores y pasar la variable como parámetro
        //header('Location: errorpage2.html?customError=' . urlencode($customError));

        if ($row['email'] === $email && $row['password'] === $password)
        {
            $user = $row['user_type'];
            $name = $row['name'];

            if ($user>0 && $name>0){
                $_SESSION['user_type'] = $user;
                $_SESSION['name'] = $name;
            }

            // El usuario existe y la contraseña es correcta
            session_regenerate_id();
            $_SESSION['login'] = TRUE;
            $_SESSION['email'] = $email;
            //$_SESSION['user_type'] = $userType;

            header('Location: index.php');
            exit();

        }
    }else {

        // Redireccionar a la página de errores y pasar la variable como parámetro

        $error = '';
        $_SESSION['wrongPassword'] = true;
        header('Location: errorscreen.php');
        exit();

    }
?>