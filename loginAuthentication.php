<?php
    
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
    }
    

    
    
    
    $email = $_POST['email'];

    // Verifica si el usuario existe en las bases de datos
    if ($stmt = $conn->prepare('SELECT id_user, password FROM users WHERE email = ?')) {
        $stmt->bind_param('s', $_POST['email']);
        $stmt->execute();
        
        // Redireccionar a la página de errores y pasar la variable como parámetro
        //header('Location: errorpage2.html?customError=' . urlencode($customError));
        
        //El bug esta dentro de aqui<<<<<<<<<<<<<<<<<
        if ($stmt->num_rows > 0) {
            $stmt->bind_result($id, $storedPassword);
            $stmt->fetch();
            //header('Location: errorpage3.html');

            // Validar la contraseña
            if ($_POST['password'] === $storedPassword && $id === $_POST['id']) {
                // El usuario existe y la contraseña es correcta
                session_regenerate_id();
                $_SESSION['login'] = TRUE;
                $_SESSION['email'] = $_POST['email']; 
                $_SESSION['id'] = $id;
                
                header('Location: inicio.php');
                exit();
            }else {
                // Obtener el mensaje de error de la conexión
                $customError = "Contraseña incorrecta";

                // Redireccionar a la página de errores y pasar la variable como parámetro
                header('Location: errorpage2.html?customError=' . urlencode($customError));
                exit();
            }
            
            // Si no encuentra al usuario lo envia a pagina de error
        }else {
            // Usuario no encontrado

            // Redireccionar a la página de errores y pasar la variable como parámetro
            header('Location: errorpage3.html');
            exit();
        }
    }
    //Hasta aqui-----------------------

        //Descomentar este codigo despues de debugin!!!!!!!!!!!!!!!!!!!!!<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< 
    
    // Si llegamos aquí, la autenticación falló
    
    //si no hay datos muestra error y redireccionar
    $customError = "La autenticación falló";

    // Redireccionar a la página de errores y pasar la variable como parámetro
    header('Location: errorpage4.html?customError=' . urlencode($customError));
    exit();
    
    $stmt->close();
?>