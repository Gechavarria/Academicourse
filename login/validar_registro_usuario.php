<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once "conexionBD.php";
$con = conectar();


$usu_nuevo = $_POST["usuario_nuevo"];
$contrasena_usuario = $_POST["contraseña_nueva"];




$sql_agregar = "INSERT INTO inicio_login (usuario, contrasena) VALUES ('$usu_nuevo', '$contrasena_usuario')";
$query = mysqli_query($con, $sql_agregar);

if ($query) {
  header("Location: index.html");
}else {
   echo "error";
}

$sentencia_agregar = null;
$pdo =null;