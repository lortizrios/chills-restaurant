<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chill's Restaurant Home Page</title>
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <link rel="stylesheet" href="css/mystyles.css">
    <link rel="stylesheet" href="css/StandardStyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php 
        session_start();
        include_once 'include/navbar_flake.php';
        
        //Imprimen las variables de la sesion para testin
        $email = $_SESSION['email'];
        $id = $_SESSION['id_user'];
        $name =$_SESSION['name'];

        echo '--| Email: ' . $_SESSION['email']. ' | ';
        echo 'ID: '.$_SESSION['id_user'];
        echo ' Name: '.$_SESSION['name'];
    ?>

    <div class="section pt-4 pb-0">
        <nav class="breadcrumb has-arrow-separator">    
            <ul class="container is-size-2">
                <li><a href="index.php">Home</a></li>
                <li><a href="myaccount.php">My Account</a></li>
            </ul>
        </nav>
    </div>

    <!-- Product info -->
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="columm is-3">
                    <h1 class="is-size-1 title">
                        My Account
                    </h1>
                    <?php
                      // Importar la conexión a la base de datos
                      require_once 'include/db.php';
                    
                      // Obtener la conexión a la base de datos
                      $conn = dataBaseConnetion();
                      
                      if($conn) {
                        // Consulta SQL
                        $query = "SELECT * FROM users WHERE email = '$email' AND id_user = '$id'";
                        $result = $conn->query($query);
                
                        # Iterar sobre los resultados
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                # Obtener los datos de cada registro
                                $id_user = $row["id_user"];
                                $name = $row["name"];
                                $email = $row["email"];
                                $user_type = $row["user_type"];
                                //$employee_number = $row["employee_number"];

                                # Ingresar los datos en el HTML
                                echo '<div class="is-size-4">';
                                echo '<h3>';
                                echo '        Employee:';
                                echo '        <button id="remove_employee" class="button is-danger is-small ml-3">Remove Account</button>';
                                echo '    </h3>';
                                echo '    <p>';
                                echo '        Name: ' . $name;
                                echo '    </p>';
                                echo '    <p>';
                                echo '        Email: ' . $email;
                                echo '    </p>';
                                echo '    <p>';
                                echo '        User Type: ' . $user_type;
                                echo '    </p>';
                                // echo '    <p>';
                                // echo '        Employee Number: ' . $employee_number;
                                // echo '    </p>';
                                echo '    <br>';
                                echo '<div/>';
                            }
                        }else{
                            echo 'No se obtuvieron usuarios';
                        }

                        // Cerrar la conexión
                        $conn->close();
                      }
                      else 
                      { 
                          echo "Error al obtener la conexión a la base de datos.";
                      } 
                    ?>

                </div>
            </div>
    </section>

    <script src="javascript/script.js"></script>
    <script>
    //Alerta para confirmar si quiere remover la cuenta
    const buttons = document.querySelectorAll("button");

    for (const button of buttons) {
        button.addEventListener("click", function() {
            // Adds the alert logic here

            // Adds the cancel option
            const options = ["Yes", "No"];
            const confirmed = confirm("Are you sure you want to delete this account?", options);

            // Your code here
        });
    }
    </script>
</body>

</html>
