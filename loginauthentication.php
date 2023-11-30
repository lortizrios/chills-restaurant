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

    $query = "SELECT * FROM accounts WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    // Verifica si el usuario existe en las bases de datos
    if (mysqli_num_rows($result)) {
        $row = mysqli_fetch_assoc($result);

        // Redireccionar a la página de errores y pasar la variable como parámetro
        //header('Location: errorpage2.html?customError=' . urlencode($customError));

        if ($row['email'] === $email && $row['password'] === $password) {
            $userType = $row['user_type'];
            $name = $row['name'];
            $id =$row['id_account'];
            $name = $row['account_name'];
            $address = $row['address'];
            $phoneNumber = $row['phone_number'];
            $isEnabled = $row['is_enabled'];
            $hideAccounts = $row['hide_accounts'];

            var_dump($userType);
            var_dump($name);
            var_dump($id);
            var_dump($account_name);
            var_dump($address);
            var_dump($phoneNumber);
            var_dump($isEnabled);
            var_dump($hideAccounts);
            
            // Si no esta logeado pues loguea al usuario
            if (!$_SESSION['login']) {
            
                // if($isEnabled){
                //     $_SESSION['disabled-accounts'];
                //     header('Location: login.php');
                // }else{

                    $_SESSION['login'] = TRUE;
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $name;
                    $_SESSION['id_user'] = $id;
                    $_SESSION['user_type'] = $userType;
                    $_SESSION['address'] = $address;
                    $_SESSION['is_enabled'] = $isEnabled;
                    $_SESSION['phone_number'] = $phoneNumber;
                    $_SESSION['hide-accounts'] = $hideAccounts;

                    header('Location: index.php');
                //}
            }
        }
    } else{

        // Redireccionar a la página de errores y pasar la variable como parámetro

        $error = $_SESSION['wrongPassword'] = 'Ha ingresado un email o password incorrecto!!';
        header('Location: login.php');
        exit();

    }

?>