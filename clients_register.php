<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <link rel="stylesheet" href="css/mystyles.css">

    <!--Validacion JS-->
    <script type="text/javascript" src="javascript/validation_register.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- Conexion a base de datos y funciones -->
    <?php include '/include/funciones.php';?>

</head>

<body>
    <!-- Aqui va el navbar -->
    <?php include ('include/navbar.php')?>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">

                    <form action="insert_client.php" method="POST">
                        <div class="field">
                            <h1>Registro de clientes</h1>
                            <br>

                            <label class="label">Name:</label>
                            <div class="control">
                                <input id="name" name="name" class="input" type="text" placeholder="Example: Juan"
                                    required>
                            </div>
                        </div>

                        <!-- <div class="field">
                          <label class="label">Last Name:</label>
                          <div class="control">
                            <input id="lastName" name="lastName" class="input" type="text" placeholder="Example: Medina Alonzo">
                          </div>
                      </div> -->

                        <!-- <div class="field">
                            <label class="label">Phone Number:</label>
                            <div class="control">
                                <input id="phoneNumber" name="phoneNumber" class="input" type="phone"
                                    placeholder="Example: 787-495-4839" required>
                            </div>
                        </div> -->

                        <div class="field">
                            <label class="label">Email:</label>
                            <div class="control">
                                <input id="email" name="email" class="input" type="email"
                                    placeholder="Example: JuanMedina@gmail.com" required>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Password:</label>
                            <div class="control">
                                <input id="password" name="password" class="input" type="password"
                                    placeholder="Password" required>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">User Type:</label>
                            <div class="control">
                                <input id="user-type" name="user_type" class="input" type="Client" placeholder="Client"
                                    value="Client">
                            </div>
                        </div>

                        <div class="field">
                            <div class="control is-flex is-justify-content-center">
                                <button type="submit" class="button is-success ml-1" value="Grabar"
                                    id="submit">SignUp</button>
                                <a href="login.php" class="button is-light ml-3">Go to Login</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
    // document.addEventListener("DOMContentLoaded", function() {
    //     const form = document.querySelector("form");
    //     const responseMessage = document.getElementById("responseMessage");

    //     form.addEventListener("submit", function(event) {
    //         event.preventDefault(); // Previene el envío predeterminado del formulario
    //         let isValid = true;

    //         const nameInput = document.getElementById("name");
    //         //const lastNameInput = document.getElementById("lastName");
    //         const phoneNumberInput = document.getElementById("phoneNumber");
    //         const emailInput = document.getElementById("email");
    //         const passwordInput = document.getElementById("password");


    //         // Valida el campo "Nombre"
    //         if (nameInput.value.trim() === "") {
    //             alert("Por favor, ingrese su nombre.");
    //             isValid = false;
    //         }

    //         // Valida el campo "Número de teléfono"
    //         else if (phoneNumberInput.value.trim() === "") {
    //             alert("Por favor, ingrese su número de teléfono.");
    //             isValid = false;
    //         }

    //         // Valida el campo "Correo electrónico"
    //         else if (emailInput.value.trim() === "" || !isValidEmail(emailInput.value)) {
    //             alert("Por favor, ingrese una dirección de correo electrónico válida.");
    //             isValid = false;
    //         }

    //         // Valida el campo "Contraseña" (nueva validación)
    //         else if (passwordInput.value.trim() === "") {
    //             alert("Por favor, ingrese su contraseña.");
    //             isValid = false;
    //         }

    //         if (!isValid) {
    //             event.preventDefault(); // Evita que el formulario se envíe si no es válido
    //         }
    //     });

    //     // Función para validar el formato del correo electrónico
    //     function isValidEmail(email) {
    //         const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    //         return emailRegex.test(email);
    //     }
    // });
    </script>

</body>

</html>