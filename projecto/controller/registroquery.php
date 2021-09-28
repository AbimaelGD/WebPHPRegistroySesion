<?php

    include 'conexion.php';

    if (isset($_POST['Registrar'])) {

        $Correo = $_POST['Correo'];
        $Contrasena =password_hash($_POST['Contraseña'], PASSWORD_BCRYPT);
        $Nombre = $_POST['Nombre'];
        $Apellidos = $_POST['Apellidos'];
        $FechaNacimiento = $_POST['Fecha_nacimiento'];
        $Sexo = $_POST['Sexo'];

        $insertarsql = "INSERT INTO `usuarios`(`ID`, `Usuario_Correo`, `Contraseña`, `Nombre`, `Apellidos`, `Fecha_Nacimiento`, `Sexo`) VALUES ('','$Correo','$Contrasena','$Nombre','$Apellidos','$FechaNacimiento','$Sexo')";

        $resgistarresultado = mysqli_query($conexion, $insertarsql);

        if ($resgistarresultado == true) {
            echo "Registro Exitoso";
            header("Location: /projecto");
          
        } else {
            echo "Error :( estacion";
        }
    }
 
?>
