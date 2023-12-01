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
        
        if($_SESSION['is_enabled']){
            echo 'Its Enable = True'. ' | ';
        }else {
            echo 'Its Enable = Disable'. ' | ';
        }

        if($_SESSION['hide-accounts']){
            echo 'Delete Account = True'. ' | ';
        }else {
            echo 'Delete Account = False'. ' | ';
        }
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
                            echo '    Employee:';
                            echo '  <button id="delete_account" class="button is-danger is-small ml-3">
                                        <a href="delete-accounts.php?id=' .$hideAccounts.'">Delete Account</a>
                                    </button>';
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
                                        $isDelete = $row['hide_accounts'];
                                                                                                                  
                                        //$employee_number = $row["employee_number"];

                                        # Ingresar los datos en el HTML
                                        
                                        echo '<div class="is-size-4" data-user-id="' . $rowId . '" data-user-email="' . $rowEmail . '">';                                        
                                        if ($isDelete == 0) {
                                            echo '<h3>' . $user_type;
                                            echo '  <button id="delete_account" class="button is-danger is-small ml-3"><a href="delete-accounts.php?id=' . $rowId . '">Delete Account</a></button>';
                                            
                                        }else{
                                            echo '<h3>' . $user_type;
                                            echo '  <button id="delete_account" class="button is-success is-small ml-3"><a href="delete-accounts.php?id=' . $rowId . '">Recover Account</a></button>';
                                            
                                        }

                                        if ($isEnabled == 0) {
                                            // Mueve el enlace "Editar" aquí
                                            echo '  <button id="enabled_account" class="button is-success is-small ml-3"><a href="disabled-accounts.php?id=' . $rowId . '">Activate Account</a></button>';
                                            echo '</h3>';

                                            
                                        } else {
                                            
                                            echo '  <button id="disabled_account" class="button is-warning is-small ml-3"><a href="disabled-accounts.php?id=' . $rowId . '">Deactivate Account</a></button>';
                                            echo '</h3>';
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
                //alert("Account deleted!");
                window.location.href = 'disabled-account.php';
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
            window.location.href = 'delete-accounts.php';
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
            window.location.href = 'delete-accounts.php';
        }
    });
}
    </script>
</body>

</html>

