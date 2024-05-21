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


$sql= "INSERT INTO registro_docentes(nombre, apellido, cedula, titulo1, titulo2, materia, horario) VALUES ('$nombre', '$apellido', '$cedula', '$titulo1','$titulo2','$materia','$horario')";
$query = mysqli_query($con, $sql);

if ($query) {
  header("Location: vistaDocentes.php");
}else {
   echo "error";
}

?>