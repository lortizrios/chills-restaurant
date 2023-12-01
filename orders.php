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
                        Create Order
                    </h1>

                    <?php
                        

                        $total = $_SESSION['total-to-pay'];
                        
                        // Importar la conexión a la base de datos
                        require_once 'include/db.php';
                        
                        // Obtener la conexión a la base de datos
                        $conn = dataBaseConnetion();
                        
                        if($conn) {
                            // Consulta SQL
                            $query = "SELECT * FROM menu";

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
                                    if ($rowPlateName == "Pizza Margarita") {
                                        echo '<img src="https://i.postimg.cc/fy8b1jtP/pizza-margarita.webp" alt="" class="dish-image">';
                                    }

                                    if ($rowPlateName == "Ensalada César") {
                                        echo '<img src="https://i.postimg.cc/7YqsV1Nk/Ensalada-Ce-sar-web.jpg" alt="" class="dish-image">';
                                    }

                                    if ($rowPlateName == "Hamburguesa Clásica") {
                                        echo '<img src="https://i.postimg.cc/NGnF8bty/clasic-hamburger.png" alt="" class="dish-image">';
                                    }

                                    if ($rowPlateName == "Pulpo a la gallega") {
                                        echo '<img src="https://i.postimg.cc/bNzPttDG/pulpo-a-la-gallega.jpg" alt="" class="dish-image">';
                                    }

                                    if ($rowPlateName == "Pastel de carne") {
                                        echo '<img src="https://i.postimg.cc/MKqgvJMq/pastel-carne.png" alt="" class="dish-image">';
                                    }

                                    if ($rowPlateName == "Arroz con pollo") {
                                        echo '<img src="https://i.postimg.cc/W3VwXTP4/arroz-con-pollo.jpg" alt="" class="dish-image">';
                                    }

                                    if ($rowPlateName == "Mofongo") {
                                        echo '<img src="https://i.postimg.cc/KjRk5H4z/Mofongo-PR.webp" alt="" class="dish-image">';
                                    }

                                    if ($rowPlateName == "Pastelón de plátano verde") {
                                        echo '<img src="https://i.postimg.cc/7Y4bhhnh/pastelon.jpg" alt="" class="dish-image">';
                                    }

                                    if ($rowPlateName == "Asopao de pollo") {
                                        echo '<img src="https://i.postimg.cc/MGqYYzwp/Asopado-de-Pollo.jpg" alt="" class="dish-image">';
                                    }
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
                                    echo '<div/>';
                                    // Pasa el email y el id con una sesion
                                    
                                    // $_SESSION['id-usuario-row'] = $rowId;
                                    // $_SESSION['email-usuario-row'] = $rowEmail;
                                    
                                }
                                echo ' <a class="button is-success is-small ml-3" href="check_out.php"> Check Out </a>';
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

