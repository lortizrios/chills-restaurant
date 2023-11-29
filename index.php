

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
    <canvas id="snowfall"></canvas>
    <section class="hero is-fullheight-with-navbar">
        
      <?php
        // Llamamos las funciones creadas
        include_once 'include/funciones.php';
        session_start(); 

        // Imprimimos las sessiones para testing
        printSessions();
          
        
        // Identifica en que pagina esta acctualmente
        $_SESSION['page'] = 'index';

        // Si el usuario esta logiado le da permiso a estar en index,
        // de lo contrario envia al usuario a login.php
        if(!$_SESSION['login']){

          $_SESSION['user-logout'] = 'Favor de iniciar sección para tener acceso al sistema';
          header('Location: login.php');
        }

        // Se llama el navbar de snow
        include_once 'include/navbar_flake.php';
        
        //printSessions();        
      ?>  

      <!-- Hero content: will be in the middle -->
      <div class="hero-body">
        <div class="container">
          <h1 class="title mb-6 has-text-centered is-size-1">
            <span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-snowflake">
                <line x1="2" x2="22" y1="12" y2="12"/>
                <line x1="12" x2="12" y1="2" y2="22"/>
                <path d="m20 16-4-4 4-4"/>
                <path d="m4 8 4 4-4 4"/>
                <path d="m16 4-4 4-4-4"/>
                <path d="m8 20 4-4 4 4"/>
              </svg>
              <?php
                $usuarioRegistrado = $_SESSION['usuario-registrado'];

                // Se llama una alerta de bolma cuando reciba la session de usuario registrado
                if($usuarioRegistrado){          
                  echo'<div id="successNotification" class="notification is-primary">
                    <button class="delete"></button>'. $usuarioRegistrado .'
                  </div>';

                  // Espera 3 segundos
                  echo '<script>
                    setTimeout(function() {
                      hideNotification();
                    }, 3000);
                  </script>';          
                }

                // Si recibe la sesion name imprime mensaje con nombre 
                if ($_SESSION['name'])
                {
                  echo '</span>'.$_SESSION['name'].' ,Welcome to Chills Restaurant<span>';
                }else { // Si no solo imprime mendaje de bienvenida
                  echo '</span>Welcome to Chills Restaurant<span>';
                }
              ?>
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-snowflake"><line x1="2" x2="22" y1="12" y2="12"/><line x1="12" x2="12" y1="2" y2="22"/><path d="m20 16-4-4 4-4"/><path d="m4 8 4 4-4 4"/><path d="m16 4-4 4-4-4"/><path d="m8 20 4-4 4 4"/></svg></span></h1>
        <div class="columns">
        <div class="columm is-1">
              <p class="has-text-black is-size-3">Chill's Restaurant offers a variety of soft drinks and food this businessstarted its service on November 30 2023 the owner of Chill's Restaurant is Doctor Henry Bruckman</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Hero footer: will stick at the bottom -->
      <div class="hero-foot">
        <p class="is-fixed-bottom-desktop">&copy; 2023 Chills Restaurant. All Rights Reserved.</p>   
      </div>
        
       
    </section>

    <script src="javascript/script.js"></script>
    <script src="javascript/canvas.js"></script>
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