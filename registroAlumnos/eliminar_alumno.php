<?php

include("../login/conexionBD.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM  registro_alumnos  WHERE codigo='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vistaAlumnos.php");
    }
?>