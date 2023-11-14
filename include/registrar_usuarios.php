<?php 
     function registerUser()
     { 
        require_once('bd.php'); //Referencia a la coneccion de Base de datos
        require_once('include/funciones.php');        
        
        
        // Establecer conexión a la base de datos
        $con=dataBaseConecction(); 
        
        //Inicia la sesion
        startSession();
        
        //Funcion para las sessiones 
        manageAllSessions(); 
    
        // Definir URLs para redirección
        $urlClientRegister ='./clients_register.php'; 
        $urlEdi ='./editar.php' ; 
        $urlIndex ='./index.html' ;
        $usuarioDuplicado = "Error: Usuario duplicado. Ingrese otros dato." ; 
        
        if(isset($_POST['registrar']))
        {
            $name=$_POST['name']; 
            $email=$_POST['email']; 
            $password=$_POST['password']; 
            $user_type=$_POST['user_type'];
        
            //Primero verifica si el usuario no existe
            $sql_validar="SELECT * FROM users WHERE name = '$name' AND email = '$email'"; 
            $con = dataBaseConecction(); 
            
            //Verificasi el usuario no existe 
            if ($stmt=mysqli_prepare($con, $sql_validar)) 
            { 
                // ejecutar el query
                mysqli_stmt_execute($stmt); 
                $result=mysqli_stmt_get_result($stmt); 
                $row=mysqli_fetch_assoc($result); 
                
                //Testing
                var_dump("Usuario no existe");
                
                //verifica si el usuario existe en la base de datos 
                if($row['name'] !=$name && $row['email']!=$email)
                { 
                    $con; //Guarda los datosdel usuario 
                    $query=$con -> query("INSERT INTO users (name, email, password, user_type) VALUES('$name', '$email', '$password', '$user_type')");

                    //Verifica si el usuario se puede registrar y corre el query
                    if($query)
                    {

                        //Se activa la session usuario registrado
                        $usuarioRegistrado = "usuario-registrado query linea 42 de funciones.php";

                        header("Location: $urlIndex");


                    }else{ //si no entra ejecuta imprime error

                        $errorRegistrar = "error registrar query foto linea 126 de funcionesdsd.php";
                        header("Location: $urlCan");
                    }   


                }else{//Query no guarda

                    $con = conectarBD();

                    //query que no guarda el path
                    $queryNull = $con -> query("INSERT INTO candidatos (id, nombre, inicial, apellidos, departamento, puesto, posicion,year)
                    VALUES('$num_estudiante', '$nombre', '$inicial', '$apellidos', '$departamento','$puesto', '$posicion', '$year')");

                    var_dump($queryNull);

                    //valida si query ejecuto
                    if(!$queryNull)
                    {
                        $_SESSION['candidato-registrado']="candidato-registrado query sin foto linea 110 de proceso.php";
                        header("Location: $urlCan");

                        //no ejecuta el query imprime error
                    }else{
                        $_SESSION['error-registrar']="error registrar sin foto linea 115 de proceso.php";
                        //echo "Error: " . mysqli_errno($con) . ' - ' . mysqli_error($con)."\n";
                        header("Location: $urlCan");
                    }
                }

            }else{
                $_SESSION['estudiante-duplicado'] = "Error: Numero de estudiante duplicado linea 121 de proceso.php";
                header("Location: $urlCan");
            }

        }else{
        var_dump($errorRegistrar);
        $errorRegistrar = "error registrar prepare linea 161 de funciones.php";
        header("Location: $urlCan");
        }

        //Cierra conexion
        mysqli_close($con);

        //Cierra statement
        mysqli_stmt_close($query, $queryNull, $sql_validar);
     }
?>