<?php 
    include("../login/conexionBD.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM registro_alumnos WHERE codigo='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="actualizar_alumno.php" method="POST">
                    <h1> Actualización De Datos De Alumno</h1>
                    <br>
                    
                                <input type="hidden" name="codigo" value="<?php echo $row['codigo']  ?>">
                                <label>Actualizar Nombre: </label>
                                <input type="text" class="form-control mb-3" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
                                <label>Actualizar Apellido: </label>
                                <input type="text" class="form-control mb-3" name="apellido" placeholder="apellido" value="<?php echo $row['apellido']  ?>">
                                <label>Actualizar Numero De Grupo: </label>
                                <input type="text" class="form-control mb-3" name="grupo" placeholder="Grupo" value="<?php echo $row['grupo']  ?>">
                                <label>Actualizar Nota 1: </label>
                                <input type="text" class="form-control mb-3" name="nota1" placeholder="Nota1" value="<?php echo $row['nota1']  ?>">
                                <label>Actualizar Nota 2: </label>
                                <input type="text" class="form-control mb-3" name="nota2" placeholder="Nota2" value="<?php echo $row['nota2']  ?>">
                                <label>Actualizar Nota 3: </label>
                                <input type="text" class="form-control mb-3" name="nota3" placeholder="Nota3" value="<?php echo $row['nota3']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar Alumno">
                    </form>
                    
                </div>
    </body>
</html>