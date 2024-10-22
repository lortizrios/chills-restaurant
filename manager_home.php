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
    <!-- Navbar -->
    <?php include_once ('include/navbar.php');?>

    <!-- breadcrumbs -->
    <div class="section pt-4 pb-0">
        <nav class="breadcrumb has-arrow-separator">
            <ul class="container is-size-2">
                <li><a href="index.php">Home</a></li>
                <li><a href="">Manager</a></li>
            </ul>
        </nav>
    </div>

    <!-- Product info -->
    <section class="section">
        <div class="container">
            <div class="columns">
                <div class="columm is-3">
                    <h1 class="is-size-1 title">
                        Manager Home
                    </h1>

                    <div class="is-size-3">
                        <h3>
                            Manage all accounts:
                            <a href="manage_all_accounts.php" class="button is-danger is-small ml-3">Go</a>
                        </h3>

                        <!-- <p>
                Name: Julian Agosto Ríos 
            </p>
            <p>
                Email: julian.a@gmail.com
            </p>
            <p>
                Phone number: 787-489-7363 
            </p>
            <p>
                Employee Number: 106748
            </p>
            <br> -->
                    </div>

                    <!-- <div class="is-size-4">
            <h3>
                Client:
                <button id="remove_employee" class="button is-danger is-small ml-3">Remove Account</button>  
            </h3>

            <p>
                Name: José Juan Medina 
            </p>
            <p>
                Email: jose.j.m@gmail.com
            </p>
            <p>
                Phone number: 787-567-3455 
            </p>
            <p>
                Employee Number: 265432
            </p>
            <br>
        </div>

        <div class="is-size-4">
            <h3>
                Client:
                <button id="remove_employee" class="button is-danger is-small ml-3">Remove Account</button>  
            </h3>

            <p>
                Name: Jesus Nazario Ríos 
            </p>
            <p>
                Email: jesus.n@gmail.com
            </p>
            <p>
                Phone number: 787-256-8900 
            </p>
            <p>
                Employee Number: 34567
            </p>
            <br>
        </div>

        <div class="is-size-4">
            <h3>
                Employee:
                <button id="remove_employee" class="button is-danger is-small ml-3">Remove Account</button>  
            </h3>

            <p>
                Name: Jesua Monje Ortiz 
            </p>
            <p>
                Email: jesua.m@gmail.com
            </p>
            <p>
                Phone number: 787-735-6890 
            </p>
            <p>
                Employee Number: 26789
            </p>
            <br> -->
                </div>
            </div>



        </div>
        </div>
    </section>
    <script src="javascript/script.js"></script>
    <script>
    //Alerta para confirmar si quiere remover la cuenta
    const buttons = document.querySelectorAll("button");

    for (const button of buttons) {
        button.addEventListener("click", function() {
            // Adds the alert logic here

            // Adds the cancel option
            const options = ["Yes", "No"];
            const confirmed = confirm("Are you sure you want to delete this account?", options);

            // Your code here
        });
    }
    </script>
</body>

</html>