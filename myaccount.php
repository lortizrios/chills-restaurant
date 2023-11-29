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
        $idLoginUser = $_SESSION['id_user'];
        $name =$_SESSION['name'];
        $user_type = $_SESSION['user_type'];
        $address = $_SESSION['address']; 
        $isEnabled = $_SESSION['is_enabled'];
        $phoneNumber = $_SESSION['phone_number'];
        $hideAccounts = $_SESSION['hide-accounts'];

        echo "-- Email: " . $email . " | ";
        echo "ID: " . $idLoginUser . " | ";
        echo "Name: " . $name . " | ";
        echo "User Type: " . $user_type . " | ";
        echo "Address: " . $address . " | ";
        echo "Is Enabled: " . $isEnabled . " | ";
        echo "Phone Number: " . $phoneNumber . " | ";
        echo "Delete Account: " . $hideAccounts ." | ";
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
                    
                        if($user_type == 'Client'){
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
                            echo '    <p>';
                            echo '        Address: ' . $address;
                            echo '    </p>';
                            echo '    <p>';
                            echo '        Phone Number: ' . $phoneNumber;
                            echo '    </p>';
                            echo '    <p>';
                            echo '        Client Number: ' . $idLoginUser;
                            echo '    </p>';
                            echo '    <br>';
                            echo '<div/>';
                        }
                        
                        elseif ($user_type == 'Employee') {
                            echo '<div class="is-size-4">';
                            echo '<h3>';
                            echo '    <p>';
                            echo '        User Type: ' . $user_type;
                            echo '    </p>';
                            echo '    </h3>';
                            echo '    <p>';
                            echo '        Name: ' . $name;
                            echo '    </p>';
                            echo '    <p>';
                            echo '        Email: ' . $email;
                            echo '    </p>';
                            echo '    <p>';
                            echo '        Address: ' . $address;
                            echo '    </p>';
                            echo '    <p>';
                            echo '        Phone Number: ' . $phoneNumber;
                            echo '    </p>';
                            echo '    <p>';
                            echo '        Employee Number: ' . $idLoginUser;
                            echo '    </p>';
                            echo '    <br>';
                            echo '<div/>';
                        }

                        // Imprime todas las cuentas cuando es Manager
                        else{
                            // Importar la conexión a la base de datos
                            require_once 'include/db.php';
                            
                            // Obtener la conexión a la base de datos
                            $conn = dataBaseConnetion();
                            
                            if($conn) {
                                // Consulta SQL
                                $query = "SELECT * FROM accounts";

                                $result = $conn->query($query);
                        
                                # Iterar sobre los resultados
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        # Obtener los datos de cada registro
                                        
                                        $rowEmail = $row["email"];
                                        $user_type = $row["user_type"];
                                        $rowId = $row["id_account"];
                                        $name = $row["account_name"];
                                        $address = $row['address']; 
                                        $isEnabled = $row['is_enabled'];
                                        $phoneNumber = $row['phone_number'];                                   
                                        
                                        

                                        
                                        //$employee_number = $row["employee_number"];

                                        # Ingresar los datos en el HTML
                                        echo '<div class="is-size-4" data-user-id="' . $rowId . '" data-user-email="' . $rowEmail . '">';                                        
                                        if($isEnabled == 0){                                                
                                            echo ' <h3> '.$user_type.':
                                                <button id="delete_account" class="button is-danger is-small ml-3">Delete Account</button>
                                                <button id="enabled_account" class="button is-success is-small ml-3">Activate Account</button>';
                                            '</h3>';
                                            // Crear una session pasando el id de cada usuario y el email para poderlos usar en el backend 
                                        }else{
                                            echo ' <h3> '.$user_type.':
                                                <button id="delete_account" class="button is-danger is-small ml-3">Delete Account</button>
                                                <button id="disabled_account" class="button is-warning is-small ml-3">Deactivate Account</button>
                                            </h3>';
                                        }
                                        
                                        echo '    <p>';
                                        echo '        Name: ' . $name;
                                        echo '    </p>';
                                        echo '    <p>';
                                        echo '        Email: ' . $rowEmail;
                                        echo '    </p>';
                                        echo '    <p>';
                                        echo '        User Type: ' . $user_type;
                                        echo '    </p>';
                                        echo '    <p>';
                                        echo '        Address: ' . $address;
                                        echo '    </p>';
                                        echo '    <p>';
                                        echo '        Phone Number: ' . $phoneNumber;
                                        echo '    </p>';
                                        echo '    <p>';
                                        echo '        '.$user_type . ' Number: '. $rowId;
                                        echo '    </p>';
                                        echo '    <br>';
                                        echo '<div/>';
                                        // Pasa el email y el id con una sesion
                                        
                                        // $_SESSION['id-usuario-row'] = $rowId;
                                        // $_SESSION['email-usuario-row'] = $rowEmail;
                                        
                                    }
                    
                                }else{
                                    echo 'No se obtuvieron usuarios';
                                }
                                    // Cerrar la conexión
                                    $conn->close();
                                }else{ 

                                echo "Error al obtener la conexión a la base de datos.";
                            } 
                        }       
                       
                    ?>

                </div>
            </div>
    </section>

    <script src="javascript/script.js"></script>
    <script>
        // Alerta para confirmar si quiere remover la cuenta
        const deleteButtons = document.querySelectorAll("#delete_account");
        const disabledButtons = document.querySelectorAll("#disabled_account");
        const enabledButtons = document.querySelectorAll("#enabled_account");

    for (const deleteButton of deleteButtons) {
        deleteButton.addEventListener("click", function () {
            // Agrega la lógica de la alerta aquí
            const options = ["Yes", "No"];
            const confirmed = confirm("Are you sure you want to delete this account?", options);

            if (confirmed) {
                // Aquí puedes agregar la lógica para eliminar la cuenta (por ejemplo, una solicitud AJAX al servidor)
                alert("Account deleted!");
            }
        });
    }

    for (const disabledButton of disabledButtons) {
    disabledButton.addEventListener("click", function () {
        // Agrega la lógica de la alerta aquí
        const options = ["Yes", "No"];
        const confirmed = confirm("Are you sure you want to disable this account?", options);

        if (confirmed) {
            // Redirige a la página 'myaccount.php' después de deshabilitar la cuenta
            window.location.href = 'enabled-my-account.php';
        }
    });  
}

    for (const enabledButton of enabledButtons) {
    enabledButton.addEventListener("click", function () {
        // Agrega la lógica de la alerta aquí
        const options = ["Yes", "No"];
        const confirmed = confirm("Are you sure you want to Activate this account?", options);

        if (confirmed) {
            // Redirige a la página 'myaccount.php' después de deshabilitar la cuenta
            window.location.href = 'enabled-my-account.php';
        }
    });
}
    </script>
</body>

</html>

