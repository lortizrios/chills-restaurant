<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <link rel="stylesheet" href="css/mystyles.css">

    <!--Validacion JS-->
    <script type="text/javascript" src="javascript/validation_register.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <?php require_once 'include/navbar.php' ?>

    <?php
        // Importar la conexión a la base de datos
        require_once 'include/db.php';
        

        
        // Obtener la conexión a la base de datos
        $conn = dataBaseConnetion();
        
        
        
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