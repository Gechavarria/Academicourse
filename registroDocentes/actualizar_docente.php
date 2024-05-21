<?php

include("../login/conexionBD.php");
$con=conectar();


$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$cedula=$_POST['cedula'];
$titulo1=$_POST['titulo1'];
$titulo2=$_POST['titulo2'];
$materia=$_POST['materia'];
$horario=$_POST['horario'];

$sql="UPDATE registro_docentes SET nombre='$nombre',apellido='$apellido',titulo1='$titulo1',titulo2='$titulo2',materia='$materia',horario='$horario' WHERE cedula='$cedula'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: vistaDocentes.php");
    }
?>