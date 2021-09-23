<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    include 'conexion.php';

    if (isset($_POST['Registrar'])) {

        $Correo = $_POST['Correo'];
        $Contrasena = $_POST['Contraseña'];
        $Nombre = $_POST['Nombre'];
        $Apellidos = $_POST['Apellidos'];
        $FechaNacimiento = $_POST['Fecha_nacimiento'];
        $Sexo = $_POST['Sexo'];

        $insertarsql = "INSERT INTO `usuarios`(`ID`, `Usuario_Correo`, `Contraseña`, `Nombre`, `Apellidos`, `Fecha_Nacimiento`, `Sexo`) VALUES ('','$Correo','$Contrasena','$Nombre','$Apellidos','$FechaNacimiento','$Sexo')";

        $resgistarresultado = mysqli_query($conexion, $insertarsql);

        if ($resgistarresultado == true) {
            echo "Registro Exitoso";
          
        } else {
            echo "Error :( estacion";
        }
    }
 
    ?>
</body>

</html>