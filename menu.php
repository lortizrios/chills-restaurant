<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/MenuStyle.css">
  <link rel="stylesheet" href="css/mystyles.css">
</head>
<body>

<?php
    session_start();

    // Llamamos el navbar
    include_once 'include/navbar_flake.php';

    // Imprimimos las sessiones para testing
    echo '--| Email: ' . $_SESSION['email']. ' | ';
    echo 'ID: '.$_SESSION['id_user'].' | ';
    echo ' Name: '.$_SESSION['name'];

    echo '<ul class="Menu" id="Menu">';

    // Importar la conexión a la base de datos
    require_once 'include/db.php';

    // Obtener la conexión a la base de datos
    $conn = dataBaseConnetion();

    if ($conn) {
    // Consulta SQL
    $query = "SELECT * FROM menu";
    $result = $conn->query($query);

    # Iterar sobre los resultados
    if ($result->num_rows > 0) {
        // Adicional>>>>>>>>
        $counter = 0;
        // >>>>>>>>>>>>>>>>>>
        while ($row = $result->fetch_assoc()) {

        # Obtener los datos de cada registro
        $id_menu = $row["id_menu"];
        $name = $row["name"];
        $description = $row["description"];
        $price = $row["price"];

        // Adicional>>>>>>>> Inicio de la fila
        if ($counter % 2 == 0) {
            echo '<div class="row">';
        } // >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>

        echo '
        <li class="Menu-Item">
        <div class="content" id="content">
            <p>'.$name.'</p>
            <p>'.$description.'</p>
            <p>Price: <span>$</span>'.$price.'</p>
        </div>';

        // Adicional>>>>>>>>>>>>
        // Llama las imágenes de la web y las asigna a cada comida
        $images = [
            "Pizza Margarita" => "https://i.postimg.cc/fy8b1jtP/pizza-margarita.webp",
            "Ensalada César" => "https://i.postimg.cc/7YqsV1Nk/Ensalada-Ce-sar-web.jpg",
            "Hamburguesa Clásica" => "https://i.postimg.cc/NGnF8bty/clasic-hamburger.png",
            "Pulpo a la gallega" => "https://i.postimg.cc/bNzPttDG/pulpo-a-la-gallega.jpg",
            "Pastel de carne" => "https://i.postimg.cc/MKqgvJMq/pastel-carne.png",
            "Arroz con pollo" => "https://i.postimg.cc/W3VwXTP4/arroz-con-pollo.jpg",
            "Mofongo" => "https://i.postimg.cc/KjRk5H4z/Mofongo-PR.webp",
            "Pastelón de plátano verde" => "https://i.postimg.cc/7Y4bhhnh/pastelon.jpg",
            "Asopao de pollo" => "https://i.postimg.cc/MGqYYzwp/Asopado-de-Pollo.jpg"
        ]; // >>>>>>>>>>>>>>>>>>>>>>>

        // Adicional>>>>>>>>>>>>
        if (array_key_exists($name, $images)) {
            echo '<img src="'.$images[$name].'" alt="" class="dish-image">';
        } // >>>>>>>>>>>>>>>>>>>>>>>

        echo '</li>';

        // Adicional>>>>>>>>>>>
        // Fin de la fila
        if ($counter % 2 == 1) {
            echo '</div>';
        }

        $counter++;
        // >>>>>>>>>>>>>>>>>>>>>>>

        }

        // Si el último elemento deja una fila abierta, ciérrala
        if ($counter % 2 == 1) {
        echo '</div>';
        }
        // >>>>>>>>>>>>>>>>>>>>>>>
    }

    // Cerrar la conexión
    $conn->close();
    } else {
    echo "Error al obtener la conexión a la base de datos.";
    // Redireccionar a la página de errores y pasar el mensaje como parámetro
    header('Location: errorpage1.html');
    exit();
    }

    echo '</ul>';

    printSessions();
?>
<script src="javascript/MenuScript.js"></script>
</body>
</html>