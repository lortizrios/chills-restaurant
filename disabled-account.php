<?php

    
    require_once('include/db.php');

    session_start();

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        // conectar a la base de datos
        $con = dataBaseConnetion();

        // Query para buscar el id en la base de datos
        $sqlFind = "SELECT * FROM accounts WHERE id_account = '$id'";

        //adicional
        if ( $stmt = mysqli_prepare($con, $sqlFind) ) {

            // ejecutar el query
            mysqli_stmt_execute($stmt);

            //Guarda los resultados ejecutados
            $result = mysqli_stmt_get_result($stmt);

            while ( $row = mysqli_fetch_assoc($result) ){

                $rowEmail = $row["email"];
                $user_type = $row["user_type"];
                $rowId = $row["id_account"];
                $name = $row["account_name"];
                $address = $row['address']; 
                $isEnabled = $row['is_enabled'];
                $phoneNumber = $row['phone_number'];
                $hideAccount = $row['hide_accounts'];

            }    

            //echo $rowId;  

            // Verifica si la cuenta esta activada 
            if($hideAccount == 1){
            
                $queryUpdate = "UPDATE accounts SET hide_accounts = 0 WHERE id_account = $id" ; 
                    
                // crear el prepare statement
                if ( $stmt = mysqli_prepare($con, $queryUpdate)){

                    // ejecutar el query
                    if(mysqli_stmt_execute($stmt)){

                        header('Location: myaccount.php');
                    }
                }

            }else{// Imprime Error si hay error al verificar
                echo'Error al cambiar el estado de hide account = 1';
            }


            // Verifica si la cuenta esta desactivada 
            if($hideAccount == 0){
            
                $query = "UPDATE accounts SET hide_accounts = 1 WHERE id_account = $id" ; 
                    
                // crear el prepare statement
                if ( $stmt = mysqli_prepare($con, $query)){

                    // ejecutar el query
                    if(mysqli_stmt_execute($stmt)){

                        header('Location: myaccount.php');
                    }
                }

            }else{// Imprime Error si hay error al verificar
                echo'Error al cambiar el estado de hide account = 0';
            }
            
        }else {
            echo "ERROR: " . mysqli_errno($con) . ' - ' . mysqli_error($con);
        }
        
    }

    /* cierra conexion */
    mysqli_close($con);
    
    /* cerrar statement */
    mysqli_stmt_close($stmt);
   
    /* free result set */
    $result->free();

?> 