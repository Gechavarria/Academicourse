<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once "conexionBD.php";
$con=conectar();

$nombre_usuario = $_POST["usuario"];
$contrasena = $_POST["contraseña"];
$_SESSION["usuario"] = $nombre_usuario;

$sql = "SELECT * FROM  inicio_login WHERE usuario = '$nombre_usuario' and contrasena = '$contrasena'";
$resultado = mysqli_query($con, $sql);

if ($resultado) {
    header("Location: ../Menu/menu.html");

}else{
    ?>
    <?php
    include("index.html")
    ?>
    <h1 class="bad"> Error de Autenticación, El usuario y la contraseña no son correctas</h1>
    <?php
}










