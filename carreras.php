<?php

session_start();
error_reporting(0);
$varsesion= $_SESSION['user'];
if($varsesion== null || $varsesion=''){
    header("location: index.php");
    die();
}

?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carreras</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>



<header class="header">
        <div>
            <div class="header__logo">
                <a href="#">
                    <img src="img/Escuela.png" alt="logotipo">
                </a>
            </div>
            
            
        </div>
    </a>
    <div class="esc">Escuela Superior De Comercio N43 <br>
        ¡Bienvenido!



        <?php 
            $conex = mysqli_connect("localhost","root","","proyecto_db");
            $asd = $conex->query( "SELECT id, nombre from usuarios where username='$varsesion'");
            while($rowens = $asd->fetch_array()){ 
            echo '<h1>'.$rowens['nombre'].'</h1>';
              //$cateUser = $rowens['categoria'];
              //$sectorId = $rowens['id'];
            }


            ?>












      </div>
    </header>
                
                <nav class="navegacion">
                    <a class="navegacion__enlace navegacion__enlace--activo" href="carreras.php">Carreras</a>
                    <a class="navegacion__enlace" href="asistencia.php">Asistencia</a>
                    <a class="navegacion__enlace" href="informacion.html">Informacion</a>
                    <a class="navegacion__enlace" href="sugerencias.html">Sugerencias</a>
                    <a class="navegacion__enlace" href="cerrarSession.php">Cerrar Sesión</a>
                </nav> 
                
        <form class="carrera" >
            <div clas="mb-3">
            <h5>Selecciona la carrera para conocer sus materias</h5>
        <select class="carreras" name="select">
            <option value="value1">Analista en Medio Ambiente</option>
            <option value="value2" selected>Tecnico Superior en Infraestructura de tecnologia de la informacion</option>
            <option value="value3">Tecnico Superior en Desarrollo de Software</option>
            <option value="value4">Tecnico Superior en gestion Industrial</option>
          </select>
        </form></div>
</body>




<footer class="footer">
    <p class="footer__texto">Sistema creado por y para alumnos de la institucion</p>
</footer>




</html>