<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <link rel="stylesheet" href="css/mystyles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include 'include/navbarLogin.php'?>

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

                        <form action="loginAuthentication.php" method="POST" class=" box">
                            <div class="field">
                                <label for="" class="label">Email</label>
                                <div class="control has-icons-left">
                                    <input id="email" name="email" type="email" placeholder="e.g. bobsmith@gmail.com"
                                        class="input" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">Password</label>
                                <div class="control has-icons-left">
                                    <input id="password" name="password" type="password" placeholder="********"
                                        class="input" required>
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
                                <button type="submit" id="submit" class="button is-success">
                                    Login
                                </button>
                                <a href="clients_register.php" class="button is-light ml-3">Register</a>
                                <a href="manager_home.php" class="button is-danger ml-3">Manager Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
<?php
    // require('bd.php'); // Suponiendo que este archivo contiene tu función de conexión a la base de datos

    // function usuarioExiste($email, $password) {
    //     $con = obtenerBaseDeDatos(); // Establece una conexión a la base de datos

    //     // Prepara una consulta SQL para seleccionar al usuario por su email
    //     $sql = "SELECT * FROM users WHERE email = ?";

    //     if ($stmt = mysqli_prepare($con, $sql)) {
    //         // Vincula los parámetros
    //         mysqli_stmt_bind_param($stmt, "s", $email);

    //         // Ejecuta la consulta
    //         if (mysqli_stmt_execute($stmt)) {
    //             // Almacena el resultado para su uso posterior
    //             mysqli_stmt_store_result($stmt);

    //             // Verifica la cantidad de filas devueltas
    //             $numFilas = mysqli_stmt_num_rows($stmt);

    //             if ($numFilas === 1) {
    //                 // El usuario existe, ahora verifica la contraseña
    //                 mysqli_stmt_bind_result($stmt, $dbEmail, $dbPassword);
    //                 mysqli_stmt_fetch($stmt);

    //                 if (password_verify($password, $dbPassword)) {
    //                     // La contraseña es válida, el usuario existe
    //                     return true;
    //                 }
    //             }
    //         }
    //     }

    //     // El usuario no existe o las credenciales no son válidas
    //     return false;
    // }

    // if ($_SERVER["REQUEST_METHOD"] === "POST") {
    //     $email = $_POST["email"];
    //     $password = $_POST["password"];

    //     // Llama a la función para verificar si el usuario existe
    //     if (usuarioExiste($email, $password)) {
    //         // El usuario existe y las credenciales son válidas
    //         // Puedes redirigir al usuario a la página de inicio o mostrar un mensaje de éxito aquí
    //         header("Location: index.html"); // Cambia la URL de redirección según tus necesidades
    //         exit;
    //     } else {
    //         // Las credenciales no son válidas
    //         // Puedes mostrar un mensaje de error o redirigir al usuario a la página de inicio de sesión
    //         echo "Usuario o contraseña incorrecta";
    //     }
    // }

    // if (mysqli_connect_error()) {
    //     die("Error en la conexión: " . mysqli_connect_error());
    // } 
?>

</html>