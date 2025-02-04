<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Items</title>
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <link rel="stylesheet" href="css/mystyles.css">
    <link rel="stylesheet" href="css/StandardStyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
  

    <!-- Navbar -->

    <nav class="navbar has-background-transparent" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <!-- navbar items, navbar burger... -->
            <a class="navbar-item" href="https://bulma.io">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-snowflake">
                    <line x1="2" x2="22" y1="12" y2="12" />
                    <line x1="12" x2="12" y1="2" y2="22" />
                    <path d="m20 16-4-4 4-4" />
                    <path d="m4 8 4 4-4 4" />
                    <path d="m16 4-4 4-4-4" />
                    <path d="m8 20 4-4 4 4" />
                </svg>

            </a>
            <!-- Mobile version this changes the navbar to a side bar-->
            <a class="navbar-burger is-0-desktop" id="burger">
                <span></span>
                <span></span>
                <span></span>

            </a>
        </div>
        <div class="navbar-menu" id="nav-links">

            <div class="navbar-end">
                <a href="index.php" class="navbar-item">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-snowflake">
                            <line x1="2" x2="22" y1="12" y2="12" />
                            <line x1="12" x2="12" y1="2" y2="22" />
                            <path d="m20 16-4-4 4-4" />
                            <path d="m4 8 4 4-4 4" />
                            <path d="m16 4-4 4-4-4" />
                            <path d="m8 20 4-4 4 4" />
                        </svg>
                    </span>
                    Home
                </a>

                <a class="navbar-item">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-snowflake">
                            <line x1="2" x2="22" y1="12" y2="12" />
                            <line x1="12" x2="12" y1="2" y2="22" />
                            <path d="m20 16-4-4 4-4" />
                            <path d="m4 8 4 4-4 4" />
                            <path d="m16 4-4 4-4-4" />
                            <path d="m8 20 4-4 4 4" />
                        </svg>
                    </span>
                    Filler
                </a>
                <!-- Other navbar items -->


                <a href="MenuItem.html" class="navbar-item">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-snowflake">
                            <line x1="2" x2="22" y1="12" y2="12" />
                            <line x1="12" x2="12" y1="2" y2="22" />
                            <path d="m20 16-4-4 4-4" />
                            <path d="m4 8 4 4-4 4" />
                            <path d="m16 4-4 4-4-4" />
                            <path d="m8 20 4-4 4 4" />
                        </svg>
                    </span>
                    Menu

                </a>
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-snowflake">
                                <line x1="2" x2="22" y1="12" y2="12" />
                                <line x1="12" x2="12" y1="2" y2="22" />
                                <path d="m20 16-4-4 4-4" />
                                <path d="m4 8 4 4-4 4" />
                                <path d="m16 4-4 4-4-4" />
                                <path d="m8 20 4-4 4 4" />
                            </svg>
                        </span>
                        Orders
                    </a>


                    <div class="navbar-dropdown">
                        <!-- Other navbar items -->
                        <a href="" class="navbar-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-snowflake">
                                    <line x1="2" x2="22" y1="12" y2="12" />
                                    <line x1="12" x2="12" y1="2" y2="22" />
                                    <path d="m20 16-4-4 4-4" />
                                    <path d="m4 8 4 4-4 4" />
                                    <path d="m16 4-4 4-4-4" />
                                    <path d="m8 20 4-4 4 4" />
                                </svg>
                            </span>
                            Make Order
                        </a>
                        <a href="" class="navbar-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-snowflake">
                                    <line x1="2" x2="22" y1="12" y2="12" />
                                    <line x1="12" x2="12" y1="2" y2="22" />
                                    <path d="m20 16-4-4 4-4" />
                                    <path d="m4 8 4 4-4 4" />
                                    <path d="m16 4-4 4-4-4" />
                                    <path d="m8 20 4-4 4 4" />
                                </svg>
                            </span>
                            Pay Order
                        </a>
                        <a href="" class="navbar-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-snowflake">
                                    <line x1="2" x2="22" y1="12" y2="12" />
                                    <line x1="12" x2="12" y1="2" y2="22" />
                                    <path d="m20 16-4-4 4-4" />
                                    <path d="m4 8 4 4-4 4" />
                                    <path d="m16 4-4 4-4-4" />
                                    <path d="m8 20 4-4 4 4" />
                                </svg>
                            </span>
                            Claim Order
                        </a>
                        <a href="" class="navbar-item">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="lucide lucide-snowflake">
                                    <line x1="2" x2="22" y1="12" y2="12" />
                                    <line x1="12" x2="12" y1="2" y2="22" />
                                    <path d="m20 16-4-4 4-4" />
                                    <path d="m4 8 4 4-4 4" />
                                    <path d="m16 4-4 4-4-4" />
                                    <path d="m8 20 4-4 4 4" />
                                </svg>
                            </span>
                            Filler
                        </a>
                        <a href="" class="navbar-item">
                            <span>

                            </span>
                            Filler
                        </a>
                    </div>
                </div>

                <a href="login.php" class="navbar-item">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-snowflake">
                            <line x1="2" x2="22" y1="12" y2="12" />
                            <line x1="12" x2="12" y1="2" y2="22" />
                            <path d="m20 16-4-4 4-4" />
                            <path d="m4 8 4 4-4 4" />
                            <path d="m16 4-4 4-4-4" />
                            <path d="m8 20 4-4 4 4" />
                        </svg>
                    </span>
                    Login
                </a>
                <a href="register.html" class="navbar-item">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-snowflake">
                            <line x1="2" x2="22" y1="12" y2="12" />
                            <line x1="12" x2="12" y1="2" y2="22" />
                            <path d="m20 16-4-4 4-4" />
                            <path d="m4 8 4 4-4 4" />
                            <path d="m16 4-4 4-4-4" />
                            <path d="m8 20 4-4 4 4" />
                        </svg>
                    </span>
                    Register
                </a>
                <a href="" class="navbar-item">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-snowflake">
                            <line x1="2" x2="22" y1="12" y2="12" />
                            <line x1="12" x2="12" y1="2" y2="22" />
                            <path d="m20 16-4-4 4-4" />
                            <path d="m4 8 4 4-4 4" />
                            <path d="m16 4-4 4-4-4" />
                            <path d="m8 20 4-4 4 4" />
                        </svg>
                    </span>
                    My Account
                </a>
                <a href="" class="navbar-item">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-snowflake">
                            <line x1="2" x2="22" y1="12" y2="12" />
                            <line x1="12" x2="12" y1="2" y2="22" />
                            <path d="m20 16-4-4 4-4" />
                            <path d="m4 8 4 4-4 4" />
                            <path d="m16 4-4 4-4-4" />
                            <path d="m8 20 4-4 4 4" />
                        </svg>
                    </span>
                    Sign Out

                </a>

            </div>
        </div>
        </div>
        </div>
    </nav>

    <!-- Hero Content -->

    <section class="hero is has-background-transparent">
        <div class="hero-body">
            <p class="title block">
                Chill's Menu<span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-snowflake">
                        <line x1="2" x2="22" y1="12" y2="12" />
                        <line x1="12" x2="12" y1="2" y2="22" />
                        <path d="m20 16-4-4 4-4" />
                        <path d="m4 8 4 4-4 4" />
                        <path d="m16 4-4 4-4-4" />
                        <path d="m8 20 4-4 4 4" />
                    </svg></span>
            </p>

            <p class="title block m-6">
                Food! <span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-snowflake">
                        <line x1="2" x2="22" y1="12" y2="12" />
                        <line x1="12" x2="12" y1="2" y2="22" />
                        <path d="m20 16-4-4 4-4" />
                        <path d="m4 8 4 4-4 4" />
                        <path d="m16 4-4 4-4-4" />
                        <path d="m8 20 4-4 4 4" />
                    </svg></span>
            </p>

            <?php
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
                  $id_menu = $row["id_menu"];
                  $name = $row["name"];
                  $description = $row["description"];
                  $price = $row["price"];
                  //$employee_number = $row["employee_number"];

                  # Ingresar los datos en el HTML

                  
                          
                          
        echo '<ul class="Menu">
                <li class="Menu-Item">
                  <div class="text-content">
                    <p>'.$name.'</p>
                    <p>'.$description.'</p>
                    <p>Price:<span>&#36;</span>'.$price.'</p>
                  </div>';
                  
                  // Llama las imagenes de la web y las asigna a cada comida
                  if($name == "Pizza Margarita"){
                    echo '<img src="https://i.postimg.cc/fy8b1jtP/pizza-margarita.webp" alt="" class="dish-image">';
                  }
                  
                  if($name == "Ensalada César"){
                    echo '<img src="https://i.postimg.cc/7YqsV1Nk/Ensalada-Ce-sar-web.jpg" alt="" class="dish-image">';
                  }
                  
                  if($name == "Hamburguesa Clásica"){
                    echo '<img src="https://i.postimg.cc/NGnF8bty/clasic-hamburger.png" alt="" class="dish-image">';
                  }
                  
                  if($name == "Pulpo a la gallega"){
                    echo '<img src="https://i.postimg.cc/bNzPttDG/pulpo-a-la-gallega.jpg" alt="" class="dish-image">';
                  }
                  
                  if($name == "Pastel de carne"){
                    echo '<img src="https://i.postimg.cc/MKqgvJMq/pastel-carne.png" alt="" class="dish-image">';
                  }

                  if($name == "Arroz con pollo"){
                    echo '<img src="https://i.postimg.cc/W3VwXTP4/arroz-con-pollo.jpg" alt="" class="dish-image">';
                  }

                  if($name == "Mofongo"){
                    echo '<img src="https://i.postimg.cc/KjRk5H4z/Mofongo-PR.webp" alt="" class="dish-image">';
                  }

                  
                  if($name == "Pastelón de plátano verde"){
                    echo '<img src="https://i.postimg.cc/7Y4bhhnh/pastelon.jpg" alt="" class="dish-image">';
                  }

                  if($name == "Asopao de pollo"){
                    echo '<img src="https://i.postimg.cc/MGqYYzwp/Asopado-de-Pollo.jpg" alt="" class="dish-image">';
                  }
                  '</li>';
                }
              }

                // Cerrar la conexión
                $conn->close();
            }
            else 
            { 
              echo "Error al obtener la conexión a la base de datos.";
              // Redireccionar a la página de errores y pasar el mensaje como parámetro
              header('Location: errorpage1.html');
              exit();
            } 
          ?>
            <!-- <ul class="Menu">
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/KY2rMZFn/Pizza.jpg" alt="" class="dish-image">
                </li>

                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>

                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image"> -->
            </li>

            </ul>


            <!-- <p class="title block m-6">
                Drinks! <span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-snowflake">
                        <line x1="2" x2="22" y1="12" y2="12" />
                        <line x1="12" x2="12" y1="2" y2="22" />
                        <path d="m20 16-4-4 4-4" />
                        <path d="m4 8 4 4-4 4" />
                        <path d="m16 4-4 4-4-4" />
                        <path d="m8 20 4-4 4 4" />
                    </svg></span>
            </p> -->
            <!-- <ul class="Menu">
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/KY2rMZFn/Pizza.jpg" alt="" class="dish-image">


                </li>

                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>

                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
                <li class="Menu-Item">
                    <div class="text-content">
                        <p>Pizza</p>
                        <p>Description: Is made of Cheese Pepperoni and Spinach</p>
                        <p>Price:<span>&#36;</span>15.99</p>
                    </div>
                    <img src="https://i.postimg.cc/0NRYyC2N/pexels-valeria-boltneva-1639557.jpg" alt=""
                        class="dish-image">
                </li>
            </ul> -->

        </div>


    </section>
    <script src="javascript/script.js"></script>
</body>

</html>

</html>