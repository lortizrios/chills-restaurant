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

</head>

<body>
    <!-- Aqui va el navbar -->
    <?php 
        // Se inicia la sesion
        session_start();

        // Se llama las funciones creadas
        include_once 'include/funciones.php';
        
        // Se imprime las sesiones para testing
        //printSessions();

        
        $userType = $_SESSION['user_type']; 
    ?>

    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="column">

                    <form action="insert_client.php" method="POST">
                        <div class="field">
                            <h1 class = "has-text-black is-size-3">Clients Register Form</h1>
                            <br>

                            <label class="label">Name:</label>
                            <div class="control">
                                <input id="name" name="name" class="input" type="text" placeholder="Example: Juan"
                                    required>
                            </div>
                        </div>  

                        <div class="field">
                            <label class="label">Phone Number:</label>
                            <div class="control">
                                <input id="phonenumber" name="phonenumber" type="phone" class="input" placeholder="Example: 787-456-3456" required>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Email:</label>
                            <div class="control">
                                <input id="email" name="email" class="input" type="email" placeholder="Example: JuanMedina@gmail.com" required>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Address:</label>
                            <div class="control">
                                <input id="address" name="address" class="input" type="address" placeholder=" St. Venecia A50 Guaynabo PR 00578" required>
                            </div>
                        </div>

                        <div class="field">
                            <label class="label">Password:</label>
                            <div class="control">
                                <input id="password" name="password" class="input" type="password" placeholder="Password" required>
                            </div>
                        </div>


                        <?php
                        if($userType == 'client' || $userType == 'employee')
                        {
                            echo'<label class="label">User Type:</label>
                                <div class="control">
                                <input class="input" type="client" value="Client" name="user_type" readonly>
                            </div>';
                        }

                        else if($userType == 'manager')
                        {   
                            // echo'<div class="field">
                            //     <label class="label">User Type:</label>
                            //     <div class="control">
                            //         <input id="user-type" name="user_type" class="input" type="Client" placeholder="Client" value="Client">
                            //     </div>
                            // </div>';

                            // echo'<div class="field">
                            //     <label class="label">User Type:</label>
                            //     <div class="control">
                            //         <input id="user-type" name="user_type" class="input" type="Client" placeholder="Employee" value="Employee">
                            //     </div>
                            // </div>';

                            // echo'<div class="field">
                            //     <label class="label">User Type:</label>
                            //     <div class="control">
                            //         <input id="user-type" name="user_type" class="input" type="Client" placeholder="Manager" value="Manager">
                            //     </div>
                            // </div>';

                            echo'<br>
                            <label class="label">Select a user type</label>
                            <div class="select is-normal" >
                                <select name="user_type" required> 
                                    <option   </option>    
                                    <option value="client"  name="user_type">Client</option>
                                    <option value="employee" name="user_type">Employee</option>
                                    <option value="manager" name="user_type">Manager</option>
                                </select>
                            </div>';

                            
                        }else {
                            echo'<label class="label">User Type:</label>
                                <div class="control">
                                <input class="input" type="client" value="Client" name="user_type" readonly>
                            </div>';
                        }

                        ?>
                        <!-- <div class="field">
                            <label class="label">User Type:</label>
                            <div class="control">
                                <input id="user-type" name="user_type" class="input" type="Client" placeholder="Client"
                                    value="Client">
                            </div>
                        </div> -->

                        <br>
                        <div class="field">
                            <div class="control is-flex is-justify-content-center">
                                <button type="submit" class="button is-success ml-1" value="Grabar" id="submit">Register User</button>
                                <?php 

                                    // Si esta registrado muestra el boton de go home
                                    if($_SESSION['login']){
                                        echo '<a href="index.php" class="button is-light ml-3">Return to Home</a>';
                                        exit();

                                    }else { // Envia al usuario para login
                                        echo'<a href="login.php" class="button is-light ml-3">Go to Login</a>';
                                    }
                                ?>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>