<?php
    include_once 'include/funciones.php';

    session_start();

    // conexion a la base de datos
    require_once 'include/db.php';

    $conn = dataBaseConnetion();

    // Verifica si hay conexion a la base de datos
    if (!$conn) {
        // Error de conexión a la base de datos
        // Redireccionar a la página de errores y pasar la variable como parámetro
        $_SESSION['error-coneccion']='Error de coneccion';
        header('Location: errorscreen.php');
        exit();
    }

    // Verifica si faltan datos en el formulario de Login
    if (!isset($_POST['email'], $_POST['password'])) {

        // Obtener el mensaje de error de la conexión
        $customError = "Faltan datos en el formulario";

        // Redireccionar a la página de errores y pasar el mensaje como parámetro
        header('Location: errorscreen.php');
        exit();

    } else {
        function validate($data)
        {
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
    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result);

        // Redireccionar a la página de errores y pasar la variable como parámetro
        //header('Location: errorpage2.html?customError=' . urlencode($customError));

        if ($row['email'] === $email && $row['password'] === $password) {
            $user = $row['user_type'];
            $name = $row['name'];
            $id =$row['id_user'];

            if ($user > 0 && $name > 0) {
                $_SESSION['user_type'] = $user;
                $_SESSION['name'] = $name;
                $_SESSION['id_user'] = $id;
            }

            if (!$_SESSION['login']) {
                // El usuario existe y la contraseña es correcta
                //session_regenerate_id();
                $_SESSION['login'] = TRUE;
                $_SESSION['email'] = $email;
                $_SESSION['id_user'] = $id;
                header('Location: index.php');

            }
        }
    } else {

        // Redireccionar a la página de errores y pasar la variable como parámetro

        $error = $_SESSION['wrongPassword'] = 'Ha ingresado un email o password incorrecto!!';
        header('Location: login.php');
        exit();

    }

?>