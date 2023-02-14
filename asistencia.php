<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asistencia</title>
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
      </div>
    </header>
                
                <nav class="navegacion">
                    <a class="navegacion__enlace" href="carreras.php">Carreras</a>
                    <a class="navegacion__enlace navegacion__enlace--activo" href="asistencia.php">Asistencia</a>
                    <a class="navegacion__enlace" href="informacion.html">Informacion</a>
                    <a class="navegacion__enlace" href="sugerencias.html">Sugerencias</a>
                    <a class="navegacion__enlace" href="cerrarSession.php">Cerrar Sesión</a>
                </nav> 
                
        <form class="asistencia" action="asistencia">
            <div clas="mb-3">
            <h5>Selecciona el Cuatrimestre para conocer la lista de materias y tus respectivas asistencías en ellas</h5>



        <button class="cuatri1" name="select">
            <option value="value1">Primer Cuatrimestre</option>
        <button class="cuatri2" name="select">
            <option value="value2">Segundo Cuatrimestre</option>
          </select>
        </form></div>
</body>




<footer class="footer">
    <p class="footer__texto">Sistema creado por y para alumnos de la institucion</p>
</footer>
</html>