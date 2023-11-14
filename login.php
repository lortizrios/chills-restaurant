<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <link rel="stylesheet" href="css/StandardStyle.css">
    <link rel="stylesheet" href="css/mystyles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <!-- navbar items, navbar burger... -->
        <a class="navbar-item" href="https://bulma.io">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-snowflake"><line x1="2" x2="22" y1="12" y2="12"/><line x1="12" x2="12" y1="2" y2="22"/><path d="m20 16-4-4 4-4"/><path d="m4 8 4 4-4 4"/><path d="m16 4-4 4-4-4"/><path d="m8 20 4-4 4 4"/></svg>
 
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
            <a href="index.html" class="navbar-item">Home</a>
            
              <a class="navbar-item">
                Filler
              </a>
                <!-- Other navbar items -->
        
            <a href="" class="navbar-item">
                  Filler
                </a>
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                Orders
              </a>
              
            
              <div class="navbar-dropdown">
                <!-- Other navbar items -->
                <a href="" class="navbar-item">
                  Make Order
                </a>
               <a href="" class="navbar-item">Pay Order</a>
               <a href="" class="navbar-item">Claim Order</a>
               <a href="" class="navbar-item">Filler</a>
               <a href="" class="navbar-item">Filler</a>
              </div>
            </div>

            <a href="login.html" class="navbar-item">Login</a>
            <a href="register.html" class="navbar-item">Register</a>
            <a href="" class="navbar-item">My Account</a>
            <a href="" class="navbar-item">Sign Out</a>
           
            </div>
           </div>
          </div>
        </div>
  </nav>
    <script>
    function validarFormulario() {
        // Validar los campos del formulario aquí
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        if (email === "" || password === "") {
            alert("Por favor, complete todos los campos.");
            return false; // Evita el envío automático del formulario
        }
        return true; // Permite el envío del formulario
    }
    </script>
    <!-- <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">

                    <form action="index.html" method="post" onsubmit="return validarFormulario()">
                        <div class="field">
                            <label class="label"></label>
                            <div class="control">
                                <input id="email" name="email" class="input" type="email" placeholder="Email">
                                <br><br>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label"></label>
                            <div class="control">
                                <input id="password" name="password" class="input" type="password"
                                    placeholder="Password">
                            </div>
                        </div>

                        <div class="botones login">

                            <div class="control is-flex is-justify-content-start">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    Login as Manager
                                </label>

                            </div>
                            <div class="control is-flex is-justify-content-start">
                                <label class="checkbox">
                                    <input type="checkbox">
                                    Login as Employee
                                </label>
                            </div>

                            <div class="control is-flex is-justify-content-center">

                                <button type="submit" class="button is-success ml-3">Login</button>
                                <a href="clients_register.php" class="button is-light ml-3">Register</a>
                                <a href="manager_home.html" class="button is-danger ml-3">Manager Login</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section> -->

    <section class="hero is-primary is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    <div class="column is-5-tablet is-4-desktop is-5-widescreen">
                        <form action="" class="box">
                            <div class="field">
                                <label for="" class="label">Email</label>
                                <div class="control has-icons-left">
                                    <input type="email" placeholder="e.g. bobsmith@gmail.com" class="input" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">Password</label>
                                <div class="control has-icons-left">
                                    <input type="password" placeholder="*******" class="input" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="checkbox">
                                    <input type="checkbox">
                                    Login as Manager or Employee </label>

                            </div>
                            <div class="field">
                                <button class="button is-success">
                                    Login
                                </button>
                                <a href="clients_register.php" class="button is-light ml-3">Register</a>
                                <a href="manager_home.html" class="button is-danger ml-3">Manager Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
 
</body>
<?php
    require('bd.php'); // Suponiendo que este archivo contiene tu función de conexión a la base de datos

    function usuarioExiste($email, $password) {
        $con = obtenerBaseDeDatos(); // Establece una conexión a la base de datos

        // Prepara una consulta SQL para seleccionar al usuario por su email
        $sql = "SELECT * FROM users WHERE email = ?";

        if ($stmt = mysqli_prepare($con, $sql)) {
            // Vincula los parámetros
            mysqli_stmt_bind_param($stmt, "s", $email);

            // Ejecuta la consulta
            if (mysqli_stmt_execute($stmt)) {
                // Almacena el resultado para su uso posterior
                mysqli_stmt_store_result($stmt);

                // Verifica la cantidad de filas devueltas
                $numFilas = mysqli_stmt_num_rows($stmt);

                if ($numFilas === 1) {
                    // El usuario existe, ahora verifica la contraseña
                    mysqli_stmt_bind_result($stmt, $dbEmail, $dbPassword);
                    mysqli_stmt_fetch($stmt);

                    if (password_verify($password, $dbPassword)) {
                        // La contraseña es válida, el usuario existe
                        return true;
                    }
                }
            }
        }

        // El usuario no existe o las credenciales no son válidas
        return false;
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST["email"];
        $password = $_POST["password"];

        // Llama a la función para verificar si el usuario existe
        if (usuarioExiste($email, $password)) {
            // El usuario existe y las credenciales son válidas
            // Puedes redirigir al usuario a la página de inicio o mostrar un mensaje de éxito aquí
            header("Location: index.html"); // Cambia la URL de redirección según tus necesidades
            exit;
        } else {
            // Las credenciales no son válidas
            // Puedes mostrar un mensaje de error o redirigir al usuario a la página de inicio de sesión
            echo "Usuario o contraseña incorrecta";
        }
    }

    if (mysqli_connect_error()) {
        die("Error en la conexión: " . mysqli_connect_error());
    }
?>

</html>