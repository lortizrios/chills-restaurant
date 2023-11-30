<?php

/*
	Presenta todos los records de la tabla personas
*/

// incluye el script php 
require_once('include/db.php');

$sql = "select * from accounts" ; 

$con = dataBaseConnetion();

// crear el prepare statement
if ( $stmt = mysqli_prepare($con, $sql) ) {

        // ejecutar el query
        mysqli_stmt_execute($stmt);
        
        
        $result = mysqli_stmt_get_result($stmt);
        
        // obtener los resultados
        echo "<table class='table table-hover'>";
        ?>

        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Direccion</th>
                <th>Activo?</th>
                <th>Telefono</th>
                
            </tr>
        </thead>

        <tbody>
        <?php

        while ( $row = mysqli_fetch_assoc($result) ){

                $rowEmail = $row["email"];
                $user_type = $row["user_type"];
                $rowId = $row["id_account"];
                $name = $row["account_name"];
                $address = $row['address']; 
                $isEnabled = $row['is_enabled'];
                $phoneNumber = $row['phone_number']; 

            echo "<tr>\n";
                echo "<td>" . $rowId . "</td>\n";
                echo "<td>" . $name . "</td>\n";                
                echo "<td>" . $rowEmail . "</td>\n";                 
                echo "<td>" . $address . "</td>\n";   
                echo "<td>" . $isEnabled . "</td>\n"; 
                echo "<td>" . $phoneNumber . "</td>\n";    
                echo "<td><a href='editar_backend.php?id=" . $rowId . "'>Editar</a></td>\n";
                echo "<td><a href='eliminar.php?id=" . $row['id'] . "'>Eliminar</a></td>\n";
            echo "</tr>\n";
            
        }
        
        echo "</tbody>\n";
        echo "</table>\n";

	// liberar memoria
	mysqli_stmt_close($stmt);

} else {
	echo "ERROR: " . mysqli_errno($con) . ' - ' . mysqli_error($con);
}

// cerrar la conexion
mysqli_close($con);
