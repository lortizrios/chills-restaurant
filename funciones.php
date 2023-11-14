<?php
    include_once "db.php";

    $base_de_datos = dataBaseConecction();

    function usuarioExiste($email, $base_de_datos) {
        $query = $base_de_datos->prepare("SELECT email FROM users WHERE email = ? LIMIT 1;");
        $query->execute([$email]);
        return $query->rowCount() > 0;
    }

    function obtenerUsuarioPorCorreo($email, $base_de_datos) {
        $query = $base_de_datos->prepare("SELECT email FROM users WHERE email = ? LIMIT 1;");
        $query->execute([$email]);
        return $query->fetchObject();
    }

    function login($email, $base_de_datos) {
        $posibleUsuarioRegistrado = obtenerUsuarioPorCorreo($email, $base_de_datos);

        if ($posibleUsuarioRegistrado === null) {
            return false;
        }

        iniciarSesion($posibleUsuarioRegistrado);
        return true;
    }

    function iniciarSesion($usuario) {
        session_start();
        $_SESSION["correo"] = $usuario->email;
    }

    function registrarUsuario($name, $email, $password, $user_type,$base_de_datos)
    {
        $query = $base_de_datos->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        return $query->execute([$name, $email, $password, $user_type]);
        
    }
    
    //Maneja todas las sesiones 
    function manageAllSessions(){
        //destruye las $_SESSION[''] para que no hayan errores y tampoco haya más de una session activa
        session_destroy();

        //habilita las $_SESSION['']; 
        session_start();

        $update = $_SESSION['update'];
        $error_actualizar = $_SESSION['error_actualizar'];
        $errorGuardarFoto = $_SESSION['error-guardar-foto'];
        $validar_img = $_SESSION['validar_img'];
        $delError = $_SESSION['delete-error'];
        $delComplete = $_SESSION['delete-completed'];
        $estDuplicado = $_SESSION['estudiante-duplicado'];
        $canRegistrado = $_SESSION['candidato-registrado'];
        $errorRegistrar = $_SESSION['error-registrar'];

        //llama a las funciones creadas en javascript/funtions.js
        //<script>funciones();</script>

        session_destroy();
    }

    function registerUser(){
        require_once('bd.php');
        //Referencia a la coneccion de Base de datos y no a la tabla
        $con = dataBaseConecction();
        
        session_destroy();
        session_start();

        $urlClientRegister = '../client_register.php';
        $urlEdi = './editar.php';
        $urlInd = './index.html';

        $idDup = "Error: Usuario duplicado. Ingrese otros dato.";       


        if(isset($_POST['registrar'])){

            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user_type = $_POST['user_type'];
            //$inicial = $_POST['inicial'];
            //$apellidos = $_POST['apellidos'];
            // $num_estudiante = $_POST['numero-estudiante'];
            // $departamento = $_POST['departamento'];
            // $puesto = $_POST['puesto'];
            // $posicion = $_POST['posicion'];
            // $year = $_POST['year'];

            //Primero verifica si el #usuario no existe
            $sql_validar = "SELECT * FROM users WHERE name = '$name' AND email = '$email'";
            
            $con = dataBaseConecction();

            //Crear el prepare statement
            if ($stmt = mysqli_prepare($con, $sql_validar)) {

                // ejecutar el query
                mysqli_stmt_execute($stmt);
                    
                $result = mysqli_stmt_get_result($stmt);

                $row = mysqli_fetch_assoc($result);

                //verifica si el usuario existe
                if($row['name'] != $name && $row['email']!= $email){

                    //arreglo archivos
                    // $archivo = $_FILES['archivo'];
                    // $archivoName = $archivo['name'];
                    // $tipo = $archivo['type'];

                    //si tiene algun formato de documento ejecuta
                    // if($tipo != null){

                    //     //valida formato para fotos
                    //     if($tipo == "image/jpg" || $tipo == "image/jpeg"){

                    //         //si no existe el directorio 'img' lo crea
                    //         if(!is_dir('../img_candidatos')){
                    //             mkdir('../img_candidatos', 0777);
                    //         }

                            //mueve la imagen del archivo temporal al archivo final
                            // if($move = move_uploaded_file($archivo['tmp_name'],'../img_candidatos/'.$archivoName)){
                                //echo"Guardo la foto en el folder";
                                //var_dump($move);
                                //var_dump($archivoName);
                                //var_dump($archivo['tmp_name']);

                                //Conecta a la base datos
                                // $con = conectarBD();
                                $con;

                                //Inserta datos
                                $query = $con -> query("INSERT INTO users (name, email, password, user_type) 
                                VALUES('$name', '$email', '$password', '$user_type')");

                                //valida si ejecuta query
                                if($query){
                                    $_SESSION['candidato-registrado']="usuario-registrado query linea 121 de funciones.php";
                                    header("Location: $urlInd");

                                
                                }else{ //si no entra ejecuta imprime error
                                    //echo "Error: " . mysqli_errno($con) . ' - ' . mysqli_error($con)."\n";
                                    $_SESSION['error-registrar']="error registrar query foto linea 81 de proceso.php";
                                    header("Location: $urlCan");
                                }

                            // }else{
                            //     //echo"Entro error linea 86";
                            //     $_SESSION['error-guardar-foto']="Registrar error guardar foto linea 86 de proceso.php";
                            //     header("Location: $urlCan");
                            // }
                            //Termina proceso de subir archivos----------------------------
                            
                        // }else{//Entra cuando el formato de foto en incorrecto
                        //     $_SESSION['validar_img']="Imagen en formato incorrecto linea 95 de proceso.php";
                        //     header("Location: $urlCan");
                        // }

                        
                    }else{//Query no guarda

                        $con = conectarBD();
                        
                        //query que no guarda el path
                        $queryNull = $con -> query("INSERT INTO candidatos (id, nombre, inicial, apellidos, departamento, puesto, posicion, year) 
                        VALUES('$num_estudiante', '$nombre', '$inicial', '$apellidos', '$departamento','$puesto', '$posicion', '$year')");
                        
                        var_dump($queryNull);

                        //valida si query ejecuto
                        if(!$queryNull){ 
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
                //echo "Error: " . mysqli_errno($con) . ' - ' . mysqli_error($con);

                $_SESSION['error-registrar']="error registrar prepare linea 128 de proceso.php";
                header("Location: $urlCan");
            }

            //Cierra conexion
            mysqli_close($con);
            
            //Cierra statement
            mysqli_stmt_close($query, $queryNull, $sql_validar);    
        }
    

?>