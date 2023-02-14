
<?php

session_start();
error_reporting(0);
$varsesion= $_SESSION['user'];
if($varsesion== null || $varsesion=''){
    header("location: index.php");
    die();
}


    
    


$var= $_SESSION['user'];
   $conex = mysqli_connect("localhost","root","","proyecto_db");
        $asd = $conex->query( "SELECT id, nombre from usuarios where username='$var'");
        while($rowens = $asd->fetch_array()){ 
        echo '<h1> asdasddas'.$rowens['fk_rol'].'</h1>';
        $cateUser = $rowens['fk_rol'];
        //$sectorId = $rowens['id'];
             }











?>












<?php
// $Nombre="";
// if($_POST ){

//     $Nombre= (isset($_POST['Nombre']))?$_POST['Nombre']:"";
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carreras</title>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</head>









<body>



<?php
     include '../../includes/header.php';

     echo "<h1>asddasadsasdasd".$varsesion."</h1>";
    ?>



        <?php 
           


            ?>





<div>
        <form action="../../carreras.php" method="post">
            <h1>Agregar Asignatura</h1>

            <input class="form-select" type="text" placeholder="Nombre" name="Nombre">
            <input class="form-select" type="text" placeholder="Formato" name="Formato">
            <input class="form-select" type="text" placeholder="Carrera" name="Carrera">
            
            <inpu class="form-select" type="submit" value="Agregar Asignatura">
        </form>
    </div>


    <?php
     include '../../includes/footer.php';
    ?>
    
</body>




</html>