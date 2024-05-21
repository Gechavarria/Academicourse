<?php

include("../login/conexionBD.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM  registro_docentes  WHERE cedula='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vistaDocentes.php");
    }
?>