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
                <li><a href="orders.php">Orders</a></li>
                <li><a href="check_out.php">Check Out</a></li>
            </ul>
        </nav>
    </div>

    <!-- Product info -->
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="columm is-3">
                    <h1 class="is-size-1 title">
                        Chill's Restaurant Receipt for <?php echo $name ?>
                    </h1>

                    <?php

                    $status = $_SESSION['order-status'];
                    if($status){
                        echo'<div id="successNotification" class="notification is-success">
                            <button class="delete"></button>'.$status.'
                        </div>';

                        // Espera 3 segundos
                        echo '<script>
                            setTimeout(function() {
                                hideNotification();
                            }, 4000);
                        </script>';
                        //var_dump($hideAccounts);
                        
                    }

                    // Inicializar la variable total
                    $totalPrice = 0;
                                                
                        // Importar la conexión a la base de datos
                        require_once 'include/db.php';
                        
                        // Obtener la conexión a la base de datos
                        $conn = dataBaseConnetion();
                        
                        if($conn) {
                            // Consulta SQL
                            $query = "SELECT * FROM menu WHERE is_add = 1";

                            $result = $conn->query($query);

                            # Iterar sobre los resultados
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    # Obtener los datos de cada registro
                                    
                                    $rowIdMenu = $row["id_menu"];                                    
                                    $rowPlateName = $row["name"];
                                    $rowDescriptionMenu = $row['description']; 
                                    $rowPricePlate = $row['price'];
                                    $rowIsAdd = $row['is_add'];
                                                                                                                
                                    //$employee_number = $row["employee_number"];

                                    # Ingresar los datos en el HTML
                                    echo '<div class="is-size-4" data-menu-id="' . $rowIdMenu . '" data-menu-plate="' . $rowPlateName . '">';                                        
                                    // Llama las imágenes de la web y las asigna a cada comida
                                
                                    if ($rowIsAdd == 0) {
                                        echo '<h3> Order: ';
                                        echo '  <button id="add_plate" class="button is-success is-small ml-3"><a href="process_cart.php?id=' . $rowIdMenu . '">Add Plate</a></button>';
                                        echo '</h3>';

                                    }else{
                                        echo '<h3> Order: ';
                                        echo '  <button id="remove_plate" class="button is-danger is-small ml-3"><a href="process_cart.php?id=' . $rowIdMenu . '">Remove Plate </a></button>';
                                        echo '</h3>';
                                    }
  
                                    echo '    <p>';
                                    echo '        Menu number: ' . $rowIdMenu;
                                    echo '    </p>';
                                    echo '    <p>';
                                    echo         $rowPlateName;
                                    echo '    </p>';
                                    echo '    <p>';
                                    echo '        Description ' . $rowDescriptionMenu;
                                    echo '    </p>';
                                    echo '    <p>';
                                    echo '        Price: $' . $rowPricePlate;
                                    echo '    </p>';
                                    echo '    ---------------------------------';
                                    echo '    <br>';
                                    echo '</div>';

                                    // Sumar el precio actual al total
                                    $totalPrice += $rowPricePlate;
                                }

                                    
                                    
                                    
                                // Imprimir el total después del bucle
                                echo 'Total Price: $' . $totalPrice;

                                if(createOrder == true){

                                }
                                echo ' <button id="add_plate" class="button is-success is-small ml-3"><a href="create_order.php?id=' . $_SESSION['id_user'] . '">Create Order</a></button>';
                                echo ' <a id="pay_account" class="button is-success is-small ml-3"> Pay Order</a>';
                            }else{
                                echo 'No se obtuvieron platos';
                            }
                                // Cerrar la conexión
                                $conn->close();
                            }else{ 

                            echo "Error al obtener la conexión a la base de datos.";
                        } 
   
                        
                    ?>

                </div>
            </div>
    </section>
</body>

</html>

<script>
    
    function hideNotification() {
        var notification = document.getElementById('successNotification');
        if (notification) {
            notification.style.display = 'none';
        }
    }

    // Alerta para confirmar si quiere remover la cuenta
    const payButtons = document.querySelectorAll("#pay_account");

    for (const payButton of payButtons) {
        payButton.addEventListener("click", function () {
            // Agrega la lógica de la alerta aquí
            const options = ["Yes", "No"];
            const confirmed = confirm("You want use a card?", options);

            if (confirmed) {
                // Aquí puedes agregar la lógica para eliminar la cuenta (por ejemplo, una solicitud AJAX al servidor)
                alert("Thanks for choosing Chill's Restaurant!, I how to see you againt");
                //window.location.href = 'disabled-account.php';
            }
        });
    }
    </script>