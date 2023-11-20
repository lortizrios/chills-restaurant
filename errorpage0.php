<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chill's Restaurant Home Page</title>
    <link rel="stylesheet" href="bulma/css/bulma.css">
    <link rel="stylesheet" href="css/mystyles.css">
    <link rel="stylesheet" href="css/StandardStyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <script>
    // // Leer el mensaje de error de la URL
    // const errorMessage = new URLSearchParams(window.location.search).get('message');

    // // Mostrar el mensaje de error en un alert
    // if (errorMessage) {
    //     alert('Error de conexión a la base de datos');
    // } else {
    //     alert('Error de conexión a la base de datos');
    // }
    </script>

    <nav class="navbar" role="navigation" aria-label="main navigation">
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

                <a href="login.php" class="navbar-item">Login</a>
                <a href="register.html" class="navbar-item">Register</a>
                <a href="" class="navbar-item">My Account</a>
                <a href="" class="navbar-item">Sign Out</a>

            </div>
        </div>
        </div>
        </div>
    </nav>
    <!-- Product info -->
    <section class="section">
        <div class="container">
            <h1 class="title mb-6 has-text-centered is-size-1">Error a la conexion de bases de datos<span><svg
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-snowflake">
                        <line x1="2" x2="22" y1="12" y2="12" />
                        <line x1="12" x2="12" y1="2" y2="22" />
                        <path d="m20 16-4-4 4-4" />
                        <path d="m4 8 4 4-4 4" />
                        <path d="m16 4-4 4-4-4" />
                        <path d="m8 20 4-4 4 4" />
                    </svg></span></h1>
            <div class="columns">
                <div>
                    <img src="errorpage.jpg" width="950" height="950">
                </div>
            </div>
        </div>
    </section>
    <script src="javascript/script.js"></script>
</body>

</html>