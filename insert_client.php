<?php

    /*
        Inserta un record en la tabla persona
    */

    require_once('include/db.php');
    session_start();

    $nombre = filter_input(INPUT_POST, "name");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    $user_type = filter_input(INPUT_POST, "user_type");
    $direccion = filter_input(INPUT_POST, "address");
    $telefono = filter_input(INPUT_POST, "phonenumber");
    $isEnabled = 1;
    $hideAccounts = 0;
    
    // Si el email no existe, inserta los valores
    $sqlInsert = "INSERT INTO accounts values(null, ?, ?, ?, ?, ?, ?, ?, ?)" ;
    
    // Verifica si el email existe
    // $sqlEmail = "SELECT * FROM users WHERE email = ?";

    
    // conectar a la base de datos
    $con = dataBaseConnetion();

    // crear el prepare statement
    // $stmt = mysqli_prepare($con, $sql);
    // $stmtEmail = mysqli_prepare($con, $sqlEmail);

    // bind de los valores enviados con los marcadores
    $stmtInsert = mysqli_prepare($con, $sqlInsert);
    
    // bind de los valores enviados con los marcadores
    // mysqli_stmt_bind_param($stmtEmail, "s", $email);
    
    mysqli_stmt_bind_param($stmtInsert, "ssssssss", $nombre, $direccion, $telefono, $email, $password, $user_type, $isEnabled, $hideAccounts);
       
    //ejecutar el insert del usuario a las bases de datos
    if (mysqli_stmt_execute($stmtInsert)) {
        $ultimo_id = mysqli_insert_id($con);

        // Si el usuario ya se habia logeado lo reenvia a home
        if($_SESSION['login']){

            $_SESSION['usuario-registrado'] = "The user has registered successfully";
            //Redirige al usuario a la pagina users.php
            header('Location: index.php');
            exit();
        }

        $_SESSION['usuario-registrado'] = "The user has registered successfully";

        //Redirige al usuario a la pagina users.php
        header('Location: login.php');
        exit();
        
         
    }else{
        echo 'error al registrar usuario';
    }
    
    /* cerrar statement */
    // mysqli_stmt_close($stmtEmail);
    mysqli_stmt_close($stmtInsert);

    // cerrar la conexion
    mysqli_close($con);
    
?>

