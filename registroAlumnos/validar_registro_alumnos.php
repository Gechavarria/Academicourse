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

$sql= "INSERT INTO registro_alumnos(nombre, apellido, codigo, grupo, nota1, nota2, nota3, promedio) VALUES ('$nombre', '$apellido', '$codigo', '$grupo', '$nota1', '$nota2', '$nota3', '$promedio')";
$query = mysqli_query($con, $sql);

if ($query) {
  header("Location: vistaAlumnos.php");
}else {
   echo "error";
}


?>