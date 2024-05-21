<?php

include("../login/conexionBD.php");
$con=conectar();


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$codigo=$_POST['codigo'];
$grupo=$_POST['grupo'];
$nota1=$_POST['nota1'];
$nota2=$_POST['nota2'];
$nota3=$_POST['nota3'];
$promedio= ($nota1*0.3)+($nota2*0.3)+($nota3*0.4);

$sql="UPDATE registro_alumnos SET  nombre='$nombre',apellido='$apellido',grupo='$grupo', nota1='$nota1', nota2='$nota2', nota3='$nota3', promedio='$promedio' WHERE codigo='$codigo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vistaAlumnos.php");
    }
?>