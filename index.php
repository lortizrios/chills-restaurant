

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
  <?php
    // Llamamos las funciones creadas
    include_once 'include/funciones.php';

    session_start();    
    $_SESSION['page'] = 'index';

    // Si el usuario esta logiado le da permiso a estar en index,
    // de lo contrario envia al usuario a login.php
    if(!$_SESSION['login']){
      header('Location: login.php');
    }

    include_once 'include/navbar_flake.php';
    printSessions();
  ?>
    
    <!-- Product info -->
    <section class="section">
    <div class="container">
        <?php
            if ($_SESSION['name']>0){
                echo '<h1 class="title mb-6 has-text-centered is-size-1"> '.$_SESSION['name'].', welcome to Chills Restaurant <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-snowflake"><line x1="2" x2="22" y1="12" y2="12"/><line x1="12" x2="12" y1="2" y2="22"/><path d="m20 16-4-4 4-4"/><path d="m4 8 4 4-4 4"/><path d="m16 4-4 4-4-4"/><path d="m8 20 4-4 4 4"/></svg></span></h1>';
            }
        ?>
    <div class="columns">
    <div class="columm is-1">

     <p class="has-text-black is-size-3">Chills Restaurant offers a variety of soft drinks and food this business

      started its service on November 30 2023 the owner of Chill's Restaurant is Doctor Henry Bruckman
     </p>
      </div>
  </div>
  </div>
</section>
    <script src="javascript/script.js"></script>
  </body>
</html>
