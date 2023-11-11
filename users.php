<!DOCTYPE html>
<html>

<head>
    <title>Users</title>
</head>

<body>
    <h1>Información de todos los usuarios</h1>
    <?php
        // Importar la conexión a la base de datos
        require_once 'db.php';
       
        // Obtener la conexión a la base de datos
        $conn = dataBaseConecction();
        
        if($conn) {
            // Consulta SQL
            $query = "SELECT * FROM users";
            $result = $conn->query($query);

            echo"Users:";
            echo"<br>";
            if ($result->num_rows > 0) {
            echo "<ul>";
                while ($row = $result->fetch_assoc()) {
                echo "<li>" . " Id: " . $row["id_user"] . " - " . " Name: " .$row["name"] . " - ". " Email: " .$row["email"]. 
                " - " . " User Type: " . $row["user_type"] . "</li>";
                }
                echo "</ul>";
            }

            // Cerrar la conexión
            $conn->close();
        }
        else { 
            echo "Error al obtener la conexión a la base de datos.";
        }
    ?>
</body>

</html>