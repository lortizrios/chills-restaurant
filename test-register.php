
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
        session_start();
        include_once 'include/funciones.php';
        printSessions();
    ?>

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

                        <!-- label password -->
                        <div class="field">
                            <label class="label">Password:</label>
                            <div class="control">
                                <input id="password" name="password" class="input" type="password"
                                    placeholder="Password" required>
                            </div>
                        </div>

                        <!-- label user type -->
                        <!-- <div class="field">
                            <label class="label">User Type:</label>
                            <div class="control">
                                <input id="user-type" name="user_type" class="input" type="Client" placeholder="Client"
                                    value="Client">
                            </div>
                        </div> -->

                        <!-- Dropdown  User Type-->
                        <!--Opcion Departamento-->
                <div class="col-4" >
                    <label for="departamento">User Type</label>
                    <select class="custom-select custom-select-lg mb-3" name="user_type" required>
                        <option value="client"  name="user_type">Client</option>
                        <option value="employee" name="user_type">Employee</option>
                        <option value="manager" name="user_type">Manager</option>
                    </select>
                </div>

                <div class="dropdown is-active">
                    <div class="dropdown-trigger">
                        <button class="button" aria-haspopup="true" aria-controls="dropdown-menu">
                        <span>User Type</span>
                        <span class="icon is-small">
                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                        </span>
                        </button>
                    </div>
                    <div class="dropdown-menu" id="dropdown-menu" role="menu">
                        <div class="dropdown-content">
                        <a href="#" class="dropdown-item">
                            Dropdown item
                        </a>
                        <a class="dropdown-item">
                            Other dropdown item
                        </a>
                        <a href="#" class="dropdown-item is-active">
                            Active dropdown item
                        </a>
                        <a href="#" class="dropdown-item">
                            Other dropdown item
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            With a divider
                        </a>
                        </div>
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

</body>

</html>