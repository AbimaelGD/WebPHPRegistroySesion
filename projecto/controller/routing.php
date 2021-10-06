<?php

$var_getMenu = isset($_GET['menu']) ? $_GET['menu'] : 'inicio';


switch ($var_getMenu) {
    case "inicio":
        require_once('./views/home.php');
        break;
    case "acercade":
        require_once('./views/acercade.php');
        break;  
    case "login":
        require_once('./views/login.php');
        break;
    case "register":
        require_once('./views/register.php');
        break;
    case "alumnos":
        require_once('./views/viewalumnos.php');
        break;
    case "deletealumno":
        $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
        // $_idalumno = isset($_GET['idalumno']) ? $_GET['idalumno'] : '0';
        require_once('./model/alumnos.php');
        $sqlAlumnos = alumnos::delete($_idalumno);
        header("location: ./index.php?menu=alumnos");
        break;
    case "editalumno":
        $_idalumno = trim(filter_input(INPUT_GET, 'idalumno'));
        require_once('./model/alumnos.php');
        $sqlAlumnos = alumnos::consultarAlumno($_idalumno);
        include_once './views/editaralumno.php';
        break;
    default:
        require_once('./views/home.php');
}


?>
