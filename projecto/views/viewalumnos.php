<?php
session_start();

require 'conn.php';

if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT ID,Usuario_Correo,Contraseña FROM usuarios WHERE ID = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
        $user = $results;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de alumnos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bulma.min.css">

    <style>
        table.dataTable thead,
        table.dataTable tfoot {
            background-color: hsl(171, 100%, 41%);
        }

        .table thead th,
        .table tfoot th {
            color: hsl(0, 0%, 96%);
        }
    </style>

</head>

<body>

    <div class="container is-fullhd">
        <article class="tile is-child notification is-info">
            <?php if (!empty($user)) : ?>
                Bienvenido. <?= $user['Usuario_Correo']; ?>
                <br>Has iniciado sesion correctamente deseas
                <a href="logout.php">
                    Cerrar sesion
                </a>
        </article>
        <br>
        <table id="example" class="table" style="width:60%">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Alumno</th>
                    <th>Nombre</th>
                    <th>Sexo</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <?php include 'controller/conexion.php';
                    $datosalumnos = "SELECT * FROM alumnos";
                    $Verdatos = mysqli_query($conexion, $datosalumnos);
                    while ($row = mysqli_fetch_assoc($Verdatos)) { ?>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["alumno"]; ?></td>
                        <td><?php echo $row["nombre"]; ?></td>
                        <td>
                            <?php if ($row["sexo"] == 'M') { ?>
                                <i class="material-icons prefix blue-text">male</i>
                                <?php } else {
                                if ($row["sexo"] == 'F') { ?>
                                    <i class="material-icons prefix red-text">female</i>
                                <?php } else { ?>
                                    <i class="material-icons prefix green-text">transgender</i>
                            <?php  }
                            }
                            ?>
                        </td>
                        <td>
                            <button type="submit" name="action">
                                <a href="?menu=deletealumno&idalumno=<?php echo $row['id'] ?>">
                                    <i class="material-icons right white-text">delete</i></a>
                            </button>
                            <button type="submit" name="action">
                                <a href="?menu=editalumno&idalumno=<?php echo $row['id'] ?>">
                                    <i class="material-icons right white-text">edit</i></a>
                            </button>
                        </td>
                </tr>
            <?php }
                    mysqli_free_result($Verdatos);
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Alumno</th>
                    <th>Nombre</th>
                    <th>Sexo</th>
                    <th>Opciones</th>
                </tr>
            </tfoot>
        </table>
        <br>
    <?php else : ?>
        <h1>Por Inicia Sesion o Registrate</h1>
        <a href="?menu=login">Iniciar Sesion</a> or
        <a href="?menu=register">Registrate</a>
    <?php endif; ?>

    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bulma.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>