<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <link rel="stylesheet" href="css/mystyles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <nav class="navbar " role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
            <!-- navbar items, navbar burger... -->
            <a class="navbar-item" href="https://bulma.io">
                <i class='bx bxs-camera'></i>
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
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Filler
                    </a>


                    <div class="navbar-dropdown">
                        <!-- Other navbar items -->
                        <a href="" class="navbar-item">
                            Filler
                        </a>

                    </div>
                </div>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">
                        Filler
                    </a>


                    <div class="navbar-dropdown">
                        <!-- Other navbar items -->
                        <a href="" class="navbar-item">
                            Filler
                        </a>

                    </div>
                </div>

                <a href="login.php
                " class="navbar-item">Login</a>
                <a href="register.html" class="navbar-item">Register</a>
                <a href="" class="navbar-item">My Account</a>
                <a href="" class="navbar-item">Sign Out</a>

            </div>
        </div>
        </div>
        </div>
    </nav>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <form action="" id="registerForm" method="POST">
                        <div class="field">
                            <h1>Registro de clientes</h1>
                            <br>
                            <label class="label">Name:</label>
                            <div class="control">
                                <input id="name" name="name" class="input" type="text" placeholder="Example: Juan">
                            </div>
                        </div>

                        <!-- <div class="field">
                          <label class="label">Last Name:</label>
                          <div class="control">
                            <input id="lastName" name="lastName" class="input" type="text" placeholder="Example: Medina Alonzo">
                          </div>
                      </div> -->

                        <div class="field">
                            <label class="label">Phone Number:</label>
                            <div class="control">
                                <input id="phoneNumber" name="phoneNumber" class="input" type="phone"
                                    placeholder="Example: 787-495-4839">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Email:</label>
                            <div class="control">
                                <input id="email" name="email" class="input" type="email"
                                    placeholder="Example: JuanMedina@gmail.com">
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Password:</label>
                            <div class="control">
                                <input id="password" name="password" class="input" type="password"
                                    placeholder="Password">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control is-flex is-justify-content-center">
                                <button type="submit" class="button is-success ml-1" id="signupButton">Sign
                                    Up</button>
                                <a href="login.php" class="button is-light ml-3">Go to Login</a>
                            </div>
                        </div>
                    </form>
                    <?php
                       include_once "funciones.php";
                       $base_de_datos = obtenerBaseDeDatos();
                   
                       if ($_SERVER["REQUEST_METHOD"] === "POST") {
                            $user_type = "user";
                            
                            $name = $_POST["name"];
                            $email = $_POST["email"];
                            $password = $_POST["password"];
                            $user_type = $_POST["user_type"];
                   
                            if (!usuarioExiste($email, $base_de_datos)) {
                                if (registrarUsuario($name, $email, $password, $user_type, $base_de_datos)) {
                                    // El usuario se registró con éxito
                                    echo "Usuario registrado correctamente. Puede iniciar sesión ahora.";
                                } else {
                                    // Ocurrió un error al registrar al usuario
                                    echo "Error al registrar el usuario. Por favor, inténtelo de nuevo.";
                                }
                            } else {
                                // El usuario ya existe en la base de datos
                                echo "El usuario ya existe. Inicie sesión en lugar de registrarse.";
                            }   
                       }
                    ?>
                </div>
            </div>
        </div>
        <div id="responseMessage"></div>
    </section>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.querySelector("form");
        const responseMessage = document.getElementById("responseMessage");

        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Previene el envío predeterminado del formulario
            let isValid = true;

            const nameInput = document.getElementById("name");
            //const lastNameInput = document.getElementById("lastName");
            const phoneNumberInput = document.getElementById("phoneNumber");
            const emailInput = document.getElementById("email");
            const passwordInput = document.getElementById("password");


            // Valida el campo "Nombre"
            if (nameInput.value.trim() === "") {
                alert("Por favor, ingrese su nombre.");
                isValid = false;
            }

            // Valida el campo "Número de teléfono"
            else if (phoneNumberInput.value.trim() === "") {
                alert("Por favor, ingrese su número de teléfono.");
                isValid = false;
            }

            // Valida el campo "Correo electrónico"
            else if (emailInput.value.trim() === "" || !isValidEmail(emailInput.value)) {
                alert("Por favor, ingrese una dirección de correo electrónico válida.");
                isValid = false;
            }

            // Valida el campo "Contraseña" (nueva validación)
            else if (passwordInput.value.trim() === "") {
                alert("Por favor, ingrese su contraseña.");
                isValid = false;
            }

            if (!isValid) {
                event.preventDefault(); // Evita que el formulario se envíe si no es válido
            }
        });

        // Función para validar el formato del correo electrónico
        function isValidEmail(email) {
            const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
            return emailRegex.test(email);
        }
    });
    </script>
</body>

</html>