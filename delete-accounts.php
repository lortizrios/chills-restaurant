<?php
    // Incluir el archivo que contiene la función de conexión a la base de datos
    require_once('include/db.php');

    session_start();

    // Verificar si se ha pasado el parámetro 'id' en la URL
    if(isset($_GET['id'])){
        // Obtener el valor de 'id' de la URL
        $id = $_GET['id'];

        // Conectar a la base de datos
        $con = dataBaseConnetion();

        // Query para buscar la cuenta con el ID proporcionado
        $sqlFind = "SELECT * FROM accounts WHERE id_account = '$id'";

        // Adicional: Preparar y ejecutar la consulta
        if ($stmt = mysqli_prepare($con, $sqlFind)) {
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            // Obtener los datos de la cuenta
            while ($row = mysqli_fetch_assoc($result)) {
                $rowEmail = $row["email"];
                $user_type = $row["user_type"];
                $rowId = $row["id_account"];
                $name = $row["account_name"];
                $address = $row['address']; 
                $isEnabled = $row['is_enabled'];
                $phoneNumber = $row['phone_number'];
            }    

            // Imprimir el ID para verificar
            echo $rowId;

            // Verificar y cambiar el estado de 'is_enabled' según su valor actual
            if($isEnabled == 1){
                $queryUpdate = "UPDATE accounts SET is_enabled = 0 WHERE id_account = $id";

                // Preparar y ejecutar la consulta de actualización
                if ($stmt = mysqli_prepare($con, $queryUpdate)){
                    if(mysqli_stmt_execute($stmt)){
                        // Redirigir a la página 'myaccount.php'
                        header('Location: myaccount.php');
                    }
                }
            } else {
                // Imprimir un mensaje de error si hay algún problema al cambiar el estado
                echo 'Error al cambiar el estado de is_enabled = 1';
            }

            // Verificar y cambiar el estado de 'is_enabled' si es 0
            if($isEnabled == 0){
                $query = "UPDATE accounts SET is_enabled = 1 WHERE id_account = $id";

                // Preparar y ejecutar la consulta de actualización
                if ($stmt = mysqli_prepare($con, $query)){
                    if(mysqli_stmt_execute($stmt)){
                        $_SESSION['delete-accounts'] = 'Su cuenta ha sido borrada';
                        // Redirigir a la página 'myaccount.php'
                        header('Location: myaccount.php');
                    }
                }
            } else {
                // Imprimir un mensaje de error si hay algún problema al cambiar el estado
                echo 'Error al cambiar el estado de is_enabled = 0';
            }
        } else {
            // Imprimir un mensaje de error si hay algún problema con la consulta preparada
            echo "ERROR: " . mysqli_errno($con) . ' - ' . mysqli_error($con);
        }

        // Cerrar la conexión a la base de datos
        mysqli_close($con);

        // Cerrar el statement
        mysqli_stmt_close($stmt);

        // Liberar el conjunto de resultados
        $result->free();
    }
?>
