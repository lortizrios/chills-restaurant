<?php
  
    session_start();

    If($_GET['id']){

        
        //status de la orden
        $_SESSION['order-status'] = 'Orden creada con exito!!!';

        header('Location: check_out.php');

    
    }
?> 