<?php
  
    require_once('include/db.php');

    session_start();

    if(isset($_GET['id'])){

        $id = $_GET['id'];

        // conectar a la base de datos
        $con = dataBaseConnetion();

        // Query para buscar el id en la base de datos
        $sqlFind = "SELECT * FROM menu WHERE id_menu = '$id'";

        // Prepare Statement
        if ( $stmt = mysqli_prepare($con, $sqlFind) ) {

            // ejecutar el query
            mysqli_stmt_execute($stmt);

            //Guarda los resultados ejecutados
            $result = mysqli_stmt_get_result($stmt);

            while ( $row = mysqli_fetch_assoc($result) ){

                $rowIdMenu = $row["id_menu"];                                    
                $rowPlateName = $row["name"];
                $rowDescriptionMenu = $row['description']; 
                $rowPricePlate = $row['price'];
                $rowIsAdd = $row['is_add'];

            }    

            // guardar los datos en una variable session
            $_SESSION['data'] = array(
                'rowIdMenu' => $rowIdMenu,
                'rowPlateName' => $rowPlateName,
                'rowDescriptionMenu' => $rowDescriptionMenu,
                'rowPricePlate' => $rowPricePlate,
                'rowIsAdd' => $rowIsAdd
            );

            // Quita el producto del carrito 
            if($rowIsAdd == 1){
            
                $queryUpdate = "UPDATE menu SET is_add = 0 WHERE id_menu = $id" ; 
                    
                // crear el prepare statement
                if ( $stmt = mysqli_prepare($con, $queryUpdate)){

                    // ejecutar el query
                    if(mysqli_stmt_execute($stmt)){

                        header('Location: orders.php');
                    }
                }

            }else{// Imprime Error si hay error al verificar
                echo'Error al cambiar el estado de is_add a 0';
            }

            // Verifica si la cuenta esta desactivada 
            if($rowIsAdd == 0){
            
                $query = "UPDATE menu SET is_add = 1 WHERE id_menu = $id" ; 
                    
                // crear el prepare statement
                if ( $stmt = mysqli_prepare($con, $query)){

                    // ejecutar el query
                    if(mysqli_stmt_execute($stmt)){

                        header('Location: orders.php');
                    }
                }

            }else{// Imprime Error si hay error al verificar
                echo'Error al cambiar el estado de is_add a 0';
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