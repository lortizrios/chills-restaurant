<?php
    function dataBaseConnetion(): mysqli
    {
        // Conexión a la base de datos
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "chills";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Error de conexión: ".$conn->connect_error);
        } 
        
        return $conn;
    }
