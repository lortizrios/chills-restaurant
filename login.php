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

<?php 
    //include 'include/navbar_flake.php';
?>

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


    <section class="hero is-secundary is-fullheight">
        <div class="hero-body">
            <div class="container">
                <div class="columns is-centered">
                    
                    <div class="column is-5-tablet is-4-desktop is-5-widescreen">

                    <!-- Muestra el nombre del restaurante arriba del login box -->
                        <h1 class = "has-text-black is-size-3">Chill's Restaurant</h1>
                        <br>
                        <?php

                            $_SESSION['page'] = 'login';

                            if (!$_SESSION['login']){
                                session_start();
                            }

                            $usuarioRegistrado = $_SESSION['usuario-registrado'];
                            $error = $_SESSION['wrongPassword'];
                            $logOut = $_SESSION['logout'];
                            $userLogout = $_SESSION['user-logout'];


                            // Se llama una alerta de bolma cuando reciba la session de usuario registrado de sessions
                            if($usuarioRegistrado){
                                echo'<div id="successNotification" class="notification is-success">
                                    <button class="delete"></button>'. $usuarioRegistrado .'
                                </div>';

                                // Espera 3 segundos
                                echo '<script>
                                    setTimeout(function() {
                                        hideNotification();
                                    }, 3000);
                                </script>';

                                session_destroy();

                            }

                            // Se llama una alerta de bolma cuando reciba la session de wrong password
                            if($error){
                                echo'<div id="successNotification" class="notification is-danger">
                                    <button class="delete"></button>'. $error .'
                                </div>';

                                // Espera 3 segundos
                                echo '<script>
                                    setTimeout(function() {
                                        hideNotification();
                                    }, 3000);
                                </script>';
                                
                                session_destroy();

                            }

                            // if($logOut){
                                

                            //     echo'<div id="successNotification" class="notification is-succes">
                            //         <button class="delete"></button>'. $logOut .'
                            //     </div>';
                                
                            //     // Espera 3 segundos
                            //     echo '<script>
                            //         setTimeout(function() {
                            //             hideNotification();
                            //         }, 3000);
                            //     </script>';

                            //     session_destroy();
                            //     session_unset();
                            // } 

                            if($userLogout){
                                

                                echo'<div id="successNotification" class="notification is-succes">
                                    <button class="delete"></button>'. $userLogout .'
                                </div>';
                                
                                // Espera 3 segundos
                                echo '<script>
                                    setTimeout(function() {
                                        hideNotification();
                                    }, 3000);
                                </script>';

                                session_destroy();
                            } 
                        ?>
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
                            <br>
                            <div class="field">
                                <button type="submit" id="submit" class="button is-success">Login</button>
                                <a href="clients_register.php" class="button is-light ml-3">Register</a>
                                <a href="pinpadlogin.html" class="button is-danger ml-3">Pin Pad Login</a>
                            </div>
                        </form>
                    </div>
                </div>
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
</script>
