<?php

    /*
        Inserta un record en la tabla persona
    */

    require_once('include/db.php');

    $nombre = filter_input(INPUT_POST, "name");
    //$telefono = filter_input(INPUT_POST, "telefono");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    $user_type = filter_input(INPUT_POST, "user_type");
    

    $sql = "insert into users values(null, ?, ?, ?, ?)" ;

    // conectar a la base de datos
    $con = dataBaseConecction();

    // crear el prepare statement
    $stmt = mysqli_prepare($con, $sql);

    // bind de los valores enviados con los marcadores
    mysqli_stmt_bind_param($stmt, "ssss", $nombre, $email, $password, $user_type);

    // ejecutar el insert 
    if (mysqli_stmt_execute($stmt)) {
        $ultimo_id = mysqli_insert_id($con);
        
        header('Location: users.php');
        
    } else {
        header('Location: clients_register.php');
        //echo "ERROR: " . mysqli_errno($con) . ' - ' . mysqli_error($con);
    }

    /* cerrar statement */
    mysqli_stmt_close($stmt);

    // cerrar la conexion
    mysqli_close($con);
    
?>