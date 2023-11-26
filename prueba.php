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

include_once 'include/funciones.php';

session_start();

include_once 'include/navbar_prueba.php';

printSessions();
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
        while ($row = $result->fetch_assoc()) {

            # Obtener los datos de cada registro
            $id_menu = $row["id_menu"];
            $name = $row["name"];
            $description = $row["description"];
            $price = $row["price"];

            echo '
            <li class="Menu-Item">
            <div class="content" id="content">
                <p>'.$name.'</p>
                <p>'.$description.'</p>
                <p>Price: <span>$</span>'.$price.'</p>
            </div>';

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
            ];

            // Llama las imágenes de la web y las asigna a cada comida
            if (array_key_exists($name, $images)) {
                echo '<img src="'.$images[$name].'" alt="" class="dish-image">';
            }

            echo '</li>';
        }

        echo '</ul>';
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo "Error al obtener la conexión a la base de datos.";
    // Redireccionar a la página de errores y pasar el mensaje como parámetro
    header('Location: errorpage1.html');
    exit();
}
?>
<script src="javascript/MenuScript.js"></script>
</body>
</html>
